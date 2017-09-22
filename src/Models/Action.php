<?php

namespace App\Models;

use Framework\Models\Model;

class Action extends Model
{
	protected $table = "actions";
	public $tableKey = "id";
	public $id;
	public $landing_id;
	public $name;
	public $code;
	public $link;
	public $count;
	public $start_time;
}
