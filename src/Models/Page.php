<?php

namespace App\Models;

use Framework\Models\Model;

class Page extends Model
{
	protected $table = "slabeste_pages";
	public $tableKey = "page_slug";
	public $id;
	public $program_tag;
	public $page_name;
	public $page_chapter;
	public $page_slug;
	public $page_url;
}
