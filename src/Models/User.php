<?php

namespace App\Models;

use Framework\Models\Model;

class User extends Model
{
    protected $table = 'slabeste_clients';
	public $tableKey = "id";
	public $id;
    public $first_name;
    public $last_name;
    public $username;
    public $password;
    public $email;
    public $bmi;

    // Number of programs bought
    public $programsBought = null;

    // String of program tags
    public $programString = null;

    // Calculate all the money spent by user on the site
    public $totalMoney;

    public function getUserPrograms()
    {
        $account = new Account();
        $accounts = $account->where("username", "=", $this->username)
                            ->select();
        if($accounts !== [])
        {
            $programs = array();
            foreach($accounts as $account)
            {
                $program = new Program();
                $program = $program->where("program_tag", "=", $account->program_tag)
                                    ->selectOne();
                if($program !== false)
                {
                    array_push($programs, $program);
                }
            }
            return $programs;
        }
    }

    public function generatePassword($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++)
        {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateUsername($firstName, $lastName)
    {
        return strtolower($firstName . '.' . $lastName);
    }
}
