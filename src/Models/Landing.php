<?php

namespace App\Models;

use Framework\Models\Model;

class Landing extends Model
{
	protected $table = "landing";
	public $tableKey = "code";
	public $id;
	public $program_tag;
	public $name;
	public $code;
	public $template;
	public $count;
	public $start_time;
}
