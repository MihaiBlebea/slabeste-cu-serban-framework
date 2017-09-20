<?php

namespace App\Models;

use Framework\Models\Model;

class Transaction extends Model
{
	protected $table = "slabeste_transactions";
	public $tableKey = "id";
	public $id;
	public $username;
	public $program_name;
	public $program_tag;
	public $value;
	public $transaction_id;
}
