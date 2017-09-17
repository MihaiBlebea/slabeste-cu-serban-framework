<?php

namespace App\Controllers;

use Framework\Alias\Template;
use Framework\Sessions\UsernameSession;
use App\Models\User;
use App\Models\Account;
use Framework\Router\Request;
use App\Managers\OwnedProgramsManager;

use App\Models\RecoverPassword;
use App\Emails\RecoverPasswordEmail;

class LoginController
{
    public function getLogin()
    {
        Template::setAssign(['error' => false])->setDisplay('login/index.tpl');
    }

    public function postLogin(Request $request)
    {
        $session = new UsernameSession();

        // Get all programs and set owned property to TRUE if program is owned;
        $manager = new OwnedProgramsManager();
        $programs = $manager->run();

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
                    Template::setAssign([
                        "programs" => $programs
                    ])->setDisplay('home/index.tpl');
                } else {
                    // return to admin main area
                    Template::setDisplay('admin/index.tpl');
                }
            } else {
                // go to the login page with error, username or password do not match
                Template::setAssign([
                    'error'        => true,
                    'errorMessage' => 'Datele introduse nu sunt corecte'
                ])->setDisplay('login/index.tpl');
            }
        } else {
            // Return to the maine membership area
            Template::setAssign([
                "programs" => $programs
            ])->setDisplay('home/index.tpl');
        }
    }

    public function getRecover()
    {
        Template::setAssign(['error' => false])->setDisplay('login/recover.tpl');
    }

    public function postRecover(Request $request)
    {
        // Get the user who forgot his password
        $user = new User();
        $user = $user->where("email", "=", $request->out('email'))->selectOne();

        // If user exists in the database
        if($user)
        {
            // Create the RecoverPassword object and save it in database
            $recover = new RecoverPassword();

            // Generate unique long code
            $code = $recover->generateCode();

            $recover->create([
                "email" => $user->email,
                "code"  => $code
            ]);

            // Send the recover confirmation email
            RecoverPasswordEmail::send([
                "username" => $user->username,
                "email"    => $user->email,
                "code"     => $code
            ]);

            Template::setDisplay("login/confirmation.tpl");
        } else {
            // If user email is not found in the database
            Template::setAssign([
                "error"        => true,
                "errorMessage" => "Emailul furnizat nu a fost gasit in baza de date"
            ])->setDisplay("login/recover.tpl");
        }
    }

    public function getChangePassword(RecoverPassword $code, $username)
    {
        if($code)
        {
            $recover = new RecoverPassword();
            //$recover->where('code', '=', $code->code)->delete();
            Template::setAssign(['username' => $username])->setDisplay('login/change_password.tpl');
        }
    }

    public function postChangePassword(Request $request)
    {
        $user = new User();
        $user->where('username', '=', $request->out('username'))->update([
            'password' => $request->out('password1')
        ]);
        Template::setAssign(['error' => false])->setDisplay('login/index.tpl');
    }

    public function logout()
    {
        $session = new UsernameSession();
        $session->delete();
        Template::setAssign(['error' => false])->setDisplay('login/index.tpl');
    }
}
