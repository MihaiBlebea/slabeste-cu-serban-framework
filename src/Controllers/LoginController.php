<?php

namespace App\Controllers;

use Framework\Alias\Template;
use Framework\Alias\Router;
use Framework\Sessions\UsernameSession;
use App\Models\User;
use App\Models\Account;
use Framework\Router\Request;
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
        // Check if username exists in the database
        $user = new User();
        $user = $user->where("username", "=", $request->out('username'))
                     ->selectOne();

        // Check if password matches
        if($user)
        {
            // Username maches with the one in the database
            $check = $user->checkPassword($request->out('password'));

            if($check == false)
            {
                // If password check fails
                Template::setAssign([
                    'error'        => true,
                    'errorMessage' => 'Datele introduse nu sunt corecte'
                ])->setDisplay('login/index.tpl');
            } elseif($check == true) {
                // If password check is true
                $session = new UsernameSession();
                $session->setContent($user->username);

                // Check accounts database for admin tag
                $account = new Account();
                $account = $account->where("username", "=", $user->username)
                                   ->where("program_tag", "=", "admin")
                                   ->selectOne();
        
                if($account == false)
                {
                    Router::goToName("member.home.page")->goToUrl();
                } else {
                    Router::goToName("admin.home.page")->goToUrl();
                }
            }
        } else {
            // If username check fails
            Template::setAssign([
                'error'        => true,
                'errorMessage' => 'Datele introduse nu sunt corecte'
            ])->setDisplay('login/index.tpl');
        }




        // if($user !== false)
        // {
        //     $session = new UsernameSession();
        //     $session->setContent($user->username);
        //
        //     // Check accounts database for admin tag
        //     $account = new Account();
        //     $account = $account->where("username", "=", $user->username)
        //                        ->where("program_tag", "=", "admin")
        //                        ->selectOne();
        //
        //     if($account == false)
        //     {
        //         Router::goToName("member.home.page")->goToUrl();
        //     } else {
        //         Router::goToName("admin.home.page")->goToUrl();
        //     }
        // } else {
        //     // go to the login page with error, username or password do not match
        //     Template::setAssign([
        //         'error'        => true,
        //         'errorMessage' => 'Datele introduse nu sunt corecte'
        //     ])->setDisplay('login/index.tpl');
        // }
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

            // Send user to the confirmation page with the right message
            Template::setAssign([
                "error"        => true,
                "type"         => "success",
                "errorMessage" => "Ti-am trimis un email de confirmare pe adresa furnizata. Verifica-ti emailul si apasa pe link-ul de confirmare pentru a reseta parola."
            ])->setDisplay('login/confirmation.tpl');
        } else {
            // If user email is not found in the database
            Template::setAssign([
                "error"        => true,
                "errorMessage" => "Emailul furnizat nu a fost gasit in baza de date"
            ])->setDisplay("login/recover.tpl");
        }
    }

    public function getChangePassword($code, $username)
    {
        $recover = new RecoverPassword();
        $recover = $recover->where('code', '=', $code)->selectOne();

        if($recover)
        {
            $recover->delete();
            Template::setAssign(['username' => $username])->setDisplay('login/change_password.tpl');
        } else {
            // Send user to the confirmation page with the error message
            Template::setAssign([
                "error"        => true,
                "type"         => "warning",
                "errorMessage" => "Eroare! Din pacate codul de resetare a expirat, repeta procesul de verificare intrand pe pagina de login."
            ])->setDisplay('login/confirmation.tpl');
        }
    }

    public function postChangePassword(Request $request)
    {
        $user = new User();
        // hash password before saving in the database
        $hashPassword = $user->hashPassword($request->out('password1'));

        $user->where('username', '=', $request->out('username'))->update([
            'password' => $hashPassword
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
