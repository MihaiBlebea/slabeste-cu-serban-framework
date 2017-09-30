<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\Page;

class PrepareChaptersAndLessonsManager implements ManagerInterface
{
	public function run($program)
	{
		$pages = $this->getAllPages($program);

		$chapters = $this->extractChapters($pages);

		$result = $this->addPages($chapters, $pages);
		return $result;
	}

	private function getAllPages($program)
	{
		$page = new Page();
		return $page->where("program_tag", "=", $program->program_tag)->sortBy("id", "ASC")->select();
	}

	private function extractChapters($pages)
	{
		$chapters = array();
		foreach($pages as $index => $page)
		{
			if(!in_array($page->page_chapter, $chapters))
			{
				$chapters[$page->page_chapter] = ["name" => $page->page_chapter, "pages" => []];
			}
		}
		return $chapters;
	}

	private function addPages($chapters, $pages)
	{
		foreach($pages as $page)
		{
			$chapter = $page->page_chapter;
			$page = ["name" => $page->page_name, "url" => "member/" . $page->program_tag . "/" . $page->page_slug];

			array_push($chapters[$chapter]["pages"], $page);
		}
		return $chapters;
	}
}
