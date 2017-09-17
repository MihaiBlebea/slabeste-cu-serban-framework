<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Database\Worker;
use InstaRouter\App;
use InstaRouter\Factory\ModelFactory;
use InstaRouter\Events\LogUserEvent;

class TestController extends Controller
{
    /*
    public function index($program, $user, $request)
    {
        echo 'You have access to ' . $program;
        var_dump($request);
    }

    public function migrate($request)
    {
        $migrate = new Worker;
        $migrate->migrateAll();
    }

    public function drop()
    {
        $migrate = new Worker;
        $migrate->dropAll();
    }

    public function create($firstName, $lastName)
    {
        // Test works
        //$date = new \DateTime();
        $user = new User();
        $user->create([
            'firstName' => $firstName,
            'lastName' => $lastName
        ]);
    }

    public function deleteUser($request)
    {
        // Test works
        $user = new User();
        $user->where('id', '=', $request['user'])->delete();
    }

    public function selectUsers($request)
    {
        // Test works
        $user = new User();
        $result = $user->where('id', '=', $request['user'])->select();
        var_dump($result);
    }

    public function testEvents()
    {
        echo 'test events';
        $firstName = "Blebea";
        $lastName = "Serban";
        LogUserEvent::event($firstName,$lastName);
    }

    public function testSmarty()
    {
        $this->smarty->assign([
            'firstName' => 'Serban',
            'lastName' => 'Blebea'
        ]);

        $this->smarty->display('layouts/index.tpl');
    }
    */
    public function email()
    {
        global $app;
        $email = $app->bootstrapEmail();
        $email->subject('Hello!');
        $email->htmlBody('<p>Can you buy some bread please?</p>');
        //dd($email);
        $email->send('mihaiserban.blebea@gmail.com');
    }
}
