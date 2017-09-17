<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Model\User;
use InstaRouter\Model\Account;
use InstaRouter\Model\Program;
use InstaRouter\Model\Transaction;
use InstaRouter\Router\Request;
use InstaRouter\Event;

class ClientController extends Controller
{
    public function clients()
    {
        $result = $this->processClients();

        $this->smarty->assign([
            "users" => $result,
            "error" => false
        ]);
        $this->smarty->display("admin/clients.tpl");
    }

    private function processClients()
    {
        $userModel = new User();
        $users = $userModel->where('id', '>', 0)->select("array");

        $account = new Account();
        $result = array();
        if($users)
        {
            foreach($users as $user)
            {
                $items = $account->where('username', '=', $user['username'])->select("array");
                $user['programs'] = count($items);
                array_push($result, $user);
            }
            return $result;
        }
        
    }

    public function client($id, $searchMode)
    {
        $user = new User();
        $user = $user->where($searchMode, '=', $id)->select();

        if($user)
        {
            $account = new Account();
            $accounts = $account->where('username', '=', $user['username'])->select("array");
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
            $user['programs'] = $accountString;

            $tags = new Program();
            $tags = $tags->where('id', '>', 0)->select('array');

            $this->smarty->assign([
                "user" => $user,
                "tags" => array_column($tags, 'program_tag')
            ]);
            $this->smarty->display("admin/edit_client.tpl");

        } else {
            dd('no user found');
        }
    }

    public function updateClient(Request $request)
    {
        $user = new User();
        $oldUser = $user->where('id', '=', $request->retrive('id'))->select();
        $username = $oldUser['username'];

        $user->where('id', '=', $request->retrive('id'))->update([
            'first_name' => $request->retrive('first_name'),
            'last_name' => $request->retrive('last_name'),
            'email' => $request->retrive('email')
        ]);

        $account = new Account();
        $accounts = $account->where('username', '=', $username)->delete();
        $updatedAccounts = explode('&', strtolower($request->retrive('accounts')));

        foreach($updatedAccounts as $updatedAccount)
        {
            $account->create([
                'username' => $username,
                'password' => 'no password',
                'program_tag' => $updatedAccount
            ]);
        }

        $result = $this->processClients();

        $this->smarty->assign([
            "users" => $result,
            'error' => true,
            'errorType' => 'success',
            'errorMessage' => 'The client has been updated.'
        ]);
        $this->smarty->display("admin/clients.tpl");
    }

    public function getCreateClient()
    {
        $tags = new Program();
        $tags = $tags->where('id', '>', 0)->select('array');

        $this->smarty->assign([
            "tags" => array_column($tags, 'program_tag')
        ]);
        $this->smarty->display("admin/edit_client.tpl");
    }

    public function postCreateClient(Request $request)
    {
        $user = new User();
        $username = $user->generateUsername($request->retrive('first_name'), $request->retrive('last_name'));
        $password = $user->generatePassword($length = 10);
        $user->create([
            'first_name' => $request->retrive('first_name'),
            'last_name' => $request->retrive('last_name'),
            'username' => $username,
            'password' => $password,
            'email' => $request->retrive('email')
        ]);

        $accounts = explode('&', strtolower($request->retrive('accounts')));
        $account = new Account();
        foreach($accounts as $item)
        {
            $account->create([
                'username' => $username,
                'password' => 'no password',
                'program_tag' => $item
            ]);
        }

        Event::event('NewClientEvent', [
            'userEmail'     => $request->retrive('email'),
            'firstName'     => $request->retrive("first_name"),
            'username'      => $username,
            'password'      => $password,
            'program_tag'   => 'Admin created',
            'program_price' => '0'
        ]);

        $this->smarty->assign([
            "users" => $this->processClients(),
            'error' => true,
            'errorType' => 'success',
            'errorMessage' => 'The client has been created.'
        ]);
        $this->smarty->display("admin/clients.tpl");
    }

}
