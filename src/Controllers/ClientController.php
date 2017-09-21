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

class ClientController
{
    public function clients()
    {
        $managerPrograms = new NrOfProgramsBoughtManager();
        $users = $managerPrograms->run("");
        $managerMoney = new MoneySpentPerUserManager();
        $users = $managerMoney->run($users);

        Template::setAssign([
            "users" => $users,
            "error" => false
        ])->setDisplay("admin/clients.tpl");
    }

    public function client($searchBy,$searchMode)
    {
        $user = new User();
        $user = $user->where($searchMode, "=", $searchBy)->selectOne();

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

        // Process users
        $manager = new NrOfProgramsBoughtManager();
        $users = $manager->run("");

        Template::setAssign([
            "users"        => $users,
            'error'        => true,
            'errorType'    => 'success',
            'errorMessage' => 'The client has been updated.'
        ])->setDisplay("admin/clients.tpl");
    }

    public function delete(User $user)
    {
        $account = new Account();
        $accounts = $account->where("username", "=", $user->username)->delete();

        $user->delete();

        $manager = new NrOfProgramsBoughtManager();
        $users = $manager->run("");

        Template::setAssign([
            "users" => $users,
            "error" => false
        ])->setDisplay("admin/clients.tpl");
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

        // Event::event('NewClientEvent', [
        //     'userEmail'     => $request->retrive('email'),
        //     'firstName'     => $request->retrive("first_name"),
        //     'username'      => $username,
        //     'password'      => $password,
        //     'program_tag'   => 'Admin created',
        //     'program_price' => '0'
        // ]);

        $manager = new NrOfProgramsBoughtManager();
        $users = $manager->run("");

        Template::setAssign([
            "users"        => $users,
            'error'        => true,
            'errorType'    => 'success',
            'errorMessage' => 'The client has been created.'
        ])->setDisplay("admin/clients.tpl");
    }

}
