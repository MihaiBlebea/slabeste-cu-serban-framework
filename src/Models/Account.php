<?php

namespace App\Models;

use Framework\Models\Model;

class Account extends Model
{
	protected $table = "slabeste_accounts";
	public $tableKey = "id";
	public $id;
	public $username;
	public $password;
	public $program_tag;
}
