<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Program;
use App\Models\Transaction;
use Framework\Router\Request;
use Framework\Alias\Template;
use App\Managers\NrOfProgramSoldManager;

class ProductController
{
    // Get the main products page
    public function products(Request $request = null)
    {
        if($request !== null && $request->out("page") !== null)
        {
            $page = $request->out("page") - 1;
        } else {
            $page = 0;
        }

        // Get the total number of programs
        $program = new Program();
        $count = $program->count();
        $limit = 10;

        $pages = $count / $limit;
        if(is_float($pages))
        {
            $pages = intval($pages) + 1;
        }

        // Get the paginated transactions
        $programs = $program->sortBy('regdate', 'DESC')->limitBy($limit, $limit * $page)->selectAll();

        $manager = new NrOfProgramSoldManager();
        $programs = $manager->run($programs);

        foreach($programs as $index => $program)
        {
            $program->index = ($page * $limit) + $index + 1;
        }

        Template::setAssign([
            "programs"      => $programs,
            "paginateCount" => $pages,
            "previousPage"  => $page,
            "nextPage"      => $page + 2,
            'error' => false
        ])->setDisplay("admin/products.tpl");
    }
}
