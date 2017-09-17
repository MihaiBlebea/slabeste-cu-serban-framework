<?php

namespace App\Models;

use Framework\Models\Model;

class RecoverPassword extends Model
{
	protected $table = "slabeste_recover_password";
	public $tableKey = "code";
	public $id;
	public $email;
	public $code;

	public function generateCode($length = 10)
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
}
