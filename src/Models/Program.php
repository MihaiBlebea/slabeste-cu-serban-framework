<?php

namespace App\Models;

use Framework\Models\Model;

class Program extends Model
{
	protected $table = "slabeste_programs";
	public $tableKey = "program_tag";
	public $id;
	public $program_name;
	public $program_tag;
	public $program_price;
	public $program_sales_page;
	public $program_status;
	public $program_type;
	public $program_image;
	public $main_page;
	public $offer_id;
	public $plan_id;

	// property indicating if program is owned by the user or not (default FALSE)
	public $owned = false;

	// holds the total number of programs sold
	public $sold = null;
}
