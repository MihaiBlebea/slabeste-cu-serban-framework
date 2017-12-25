<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Program;
use App\Models\Transaction;
use Framework\Router\Request;
use Framework\Alias\Template;
use App\Managers\NrOfProgramsBoughtManager;
use App\Managers\MoneySpentPerUserManager;
use Framework\Factory\EventFactory;
use Framework\Factory\ListenerFactory;

class ClientController
{
    public function clients(Request $request = null)
    {
        // Set and get pagination
        if($request !== null && $request->out("page") !== null)
        {
            $page = $request->out("page") - 1;
        } else {
            $page = 0;
        }

        // Get the total number of clients
        $user = new User();
        $count = $user->count();
        $limit = 10;

        $pages = $count / $limit;
        if(is_float($pages))
        {
            $pages = intval($pages) + 1;
        }

        // Get the paginated users with or withour search options
        if($request !== null && $request->out("mode") !== null && $request->out("search") !== null)
        {
            $search = $request->out("search");
            $mode = $request->out("mode");
            $users = $user->where($mode, "=", $search)->sortBy("regdate", "DESC")->limitBy($limit, $limit * $page)->select();
        } else {
            $users = $user->sortBy("regdate", "DESC")->limitBy($limit, $limit * $page)->selectAll();
        }

        $managerPrograms = new NrOfProgramsBoughtManager();
        $users = $managerPrograms->run($users);
        $managerMoney = new MoneySpentPerUserManager();
        $users = $managerMoney->run($users);

        foreach($users as $index => $user)
        {
            $user->index = ($page * $limit) + $index + 1;
        }

        Template::setAssign([
            "users"         => $users,
            "paginateCount" => $pages,
            "previousPage"  => $page,
            "nextPage"      => $page + 2,
            "error"         => false,
            "options"       => ['id', 'username', 'email']
        ])->setDisplay("admin/clients.tpl");
    }

    public function client(User $user)
    {
        // $user = new User();
        // $user = $user->where($searchMode, "=", $searchBy)->selectOne();

        if($user)
        {
            $account = new Account();
            $accounts = $account->where('username', '=', $user->username)->select();
            $accountString = '';

            foreach(array_column($accounts, 'program_tag') as $index => $account)
            {
                if($index == 0)
                {
                    $accountString .= $account;
                } else {
                    $accountString .= "&" . $account;
                }
            }
            $user->programString = $accountString;

            $program = new Program();
            $tags = $program->where('id', '>', 0)->where("program_status", "=", 1)->select();

            Template::setAssign([
                "user" => $user,
                "tags" => array_column($tags, 'program_tag')
            ])->setDisplay("admin/edit_client.tpl");

        } else {
            dd('no user found');
        }
    }

    public function update(Request $request)
    {
        // Get old user
        $user = new User();
        $userModel = $user->where('id', '=', $request->out('id'))->selectOne();

        // Update user
        $user->where('id', '=', $request->out('id'))->update([
            'first_name' => $request->out('first_name'),
            'last_name'  => $request->out('last_name'),
            'email'      => $request->out('email')
        ]);

        // Array of accounts added from the admin console
        $updatedAccounts = explode('&', strtolower($request->out('accounts')));

        // Array of existing accounts
        $account = new Account();
        $existingAccounts = $account->where('username', '=', $userModel->username)->select();

        // Delete accounts not present in updatedAccounts
        $toDelete = array_diff(array_column($existingAccounts, 'program_tag'), $updatedAccounts);

        foreach($toDelete as $value)
        {
            $account = new Account();
            $account->where('username', '=', $userModel->username)
                    ->where("program_tag", "=", $value)
                    ->delete();
        }

        // Insert accounts that are not present in the database
        $toInsert = array_diff($updatedAccounts, array_column($existingAccounts, 'program_tag'));

        foreach($toInsert as $value)
        {
            $account = new Account();
            $account->create([
                'username'    => $userModel->username,
                'password'    => 'no password',
                'program_tag' => $value
            ]);
        };

        $this->clients();
    }

    public function delete($user)
    {
        dd('ceva');
        $account = new Account();
        $accounts = $account->where("username", "=", $user->username)->delete();

        $user->delete();

        $this->clients();
    }

    public function getCreate()
    {
        $program = new Program();
        $tags = $program->where('id', '>', 0)->select();

        Template::setAssign([
            "tags" => array_column($tags, 'program_tag')
        ])->setDisplay("admin/edit_client.tpl");
    }

    public function postCreate(Request $request)
    {
        // Generate username and password
        $user = new User();
        $username = $user->generateUsername($request->out('first_name'), $request->out('last_name'));
        $password = $user->generatePassword($length = 10);

        // Create the new user
        $user->create([
            'first_name' => $request->out('first_name'),
            'last_name'  => $request->out('last_name'),
            'username'   => $username,
            'password'   => $password,
            'email'      => $request->out('email')
        ]);

        // Create the new accounts
        $accounts = explode('&', strtolower($request->out('accounts')));
        $account = new Account();
        foreach($accounts as $item)
        {
            $account->create([
                'username'    => $username,
                'password'    => 'no password',
                'program_tag' => $item
            ]);
        }

        // Create the payload object
        $payloadNotification = [
            "username"     => $username,
            "password"     => $password,
            "email"        => $request->out("email"),
            "firstName"    => $request->out("first_name"),
            "lastName"     => $request->out("last_name"),
            "programName"  => "Program",
            "programPrice" => 0
        ];

        // Send notification to Admin and to CLient of the new client event
        $event = EventFactory::build("NewClient");
        $listenerEmailAdmin = ListenerFactory::build("NewClientEmailToAdmin");
        $listenerEmailClient = ListenerFactory::build("NewClientEmailToClient");
        $event->attach($listenerEmailAdmin)->attach($listenerEmailClient)->trigger($payloadNotification);

        $this->clients();
    }

}
