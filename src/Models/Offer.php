<?php

namespace App\Models;

use Framework\Models\Model;

class Offer extends Model
{
	protected $table = "offers";
	public $tableKey = "id";
	public $id;
	public $program_tag;
	public $price;
	public $code;
	public $reg_date;
	public $expire;
}
