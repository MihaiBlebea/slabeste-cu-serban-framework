<?php

namespace App\Models;

use Framework\Models\Model;
use App\Auth\Bcrypt;
use Framework\Injectables\Injector;

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

    // Check if password is correct or is invalid
    public function checkPassword($password)
    {
        $config = Injector::resolve("Config");
        $app_conf = $config->getConfig("application");

        if($app_conf["app_environment"] == "development")
        {
            $new_check = Bcrypt::check($password, $this->password);
            if($new_check == false)
            {
                $old_check = password_old_system($password, $this->password);

                if($old_check == true)
                {
                    $this->update([
                        "password" => $this->hashPassword($password)
                    ]);
                }
                return $old_check;
            }
            return $new_check;
        } else {
            $old_check = password_old_system($password, $this->password);
            if($old_check == true)
            {
                $this->update([
                    "password" => $this->hashPassword($password)
                ]);
                return $old_check;
            } else {
                $new_check = Bcrypt::check($password, $this->password);
                return $new_check;
            }
        }

    }

    // Hash password
    public function hashPassword($password)
    {
        return Bcrypt::hash($password);
    }

    // Get the programs owned by this user
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

    // Generate string for password
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

    // Generate username
    public function generateUsername($firstName, $lastName)
    {
        return strtolower($this->checkNameForSpaces($firstName) . '.' . $this->checkNameForSpaces($lastName));
    }

    public function checkNameForSpaces($name)
    {
        if(strpos($name, " ") !== false)
        {
            return str_replace(" ", ".", $name);
        } else {
            return $name;
        }
    }
}
