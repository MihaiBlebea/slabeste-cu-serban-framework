<?php

namespace App\Controllers;

use Framework\Alias\Template;
use Framework\Sessions\UsernameSession;
use App\Models\User;
use App\Models\Account;
use Framework\Router\Request;

use App\Model\RecoverPassword;
use App\Emails\RecoverPasswordEmail;

class LoginController
{
    public function getLogin()
    {
        Template::setAssign(['error' => false])->setDisplay('login/index.tpl');
    }

    public function postLogin(Request $request)
    {
        //dd($request->getAllPayload());
        $session = new UsernameSession();
        //dd($session->getContent());
        if($session->getContent() == null)
        {
            $user = new User();
            $user = $user->where("username", "=", $request->out('username'))
                         ->where("password", "=", $request->out('password'))
                         ->selectOne();
            if($user !== false)
            {
                $session->setContent($user->username);

                // Check accounts database for admin tag
                $account = new Account();
                $account = $account->where("username", "=", $user->username)
                                   ->where("program_tag", "=", "admin")
                                   ->selectOne();
                if($account == false)
                {
                    // return to main membership area
                    Template::setAssign(["programs" => $user->getUserPrograms()])->setDisplay('home/index.tpl');
                } else {
                    // return to admin main area
                    Template::setDisplay('admin/index.tpl');
                }
            } else {
                // go to the login page with error, username or password do not match
                Template::setAssign([
                    'error' => true,
                    'errorMessage' => 'Datele introduse nu sunt corecte'
                ])->setDisplay('login/index.tpl');
            }
        } else {
            dd("user is already logged");
            // Return to the maine membership area
            Template::setDisplay('home/index.tpl');
        }
    }

    public function recover()
    {
        $this->smarty->assign(['error' => false]);
        $this->smarty->display('login/recover.tpl');
    }

    public function getRecover(Request $request)
    {
        global $app;

        $user = new User();
        $user = $user->where("email", "=", $request->retrive('email'))->select();
        if($user)
        {
            $recover = new RecoverPassword();
            $recover = $recover->create([
                'email' => $user['email'],
                'code' => $recover->generateCode()
            ]);

            RecoverPasswordEmail::send($user['username'], $recover['email'], $recover['code']);

            $this->smarty->display('login/confirmation.tpl');
        } else {
            $this->smarty->assign([
                'error' => true,
                'errorMessage' => 'Emailul furnizat nu a fost gasit in baza de date'
            ]);
            $this->smarty->display('login/recover.tpl');
        }
    }

    public function changePassword($code, $username)
    {
        $recover = new RecoverPassword();
        $recoverFound = $recover->where('code', '=', $code)->select();

        if($recoverFound)
        {
            $recover->where('code', '=', $code)->delete();
            $this->smarty->assign(['username' => $username]);
            $this->smarty->display('login/change_password.tpl');
        }
    }

    public function getChangePassword(Request $request)
    {
        $user = new User();
        $user->where('username', '=', $request->retrive('username'))->update([
            'password' => $request->retrive('password1')
        ]);
        Login::returnPath();
    }

    public function logout()
    {
        Login::logout();
        Login::returnLogoutPath();
    }
}
