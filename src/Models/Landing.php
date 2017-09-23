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
	public $link;
	public $code;
	public $template;
	public $count;
	public $autoresponder_list;
	public $autoresponder_automation;
	public $tags;
	public $lead_count;
	public $start_time;

	public $landingPath = "landing";

	public function getTemplate($path)
	{
		return array_values(array_diff(scandir($path), array('.', '..')));
	}

	public function conversionRate()
	{
		if($this->count > 0)
		{
			return round((($this->lead_count * 100) / $this->count),2);
		}
		return 0;
	}
}
