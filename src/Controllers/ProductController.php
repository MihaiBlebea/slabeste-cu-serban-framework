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
    public function getProducts()
    {
        $manager = new NrOfProgramSoldManager();
        $programs = $manager->run("");

        Template::setAssign([
            "programs" => $programs,
            'error' => false
        ])->setDisplay("admin/products.tpl");
    }

    public function update(Request $request)
    {
        $program = new Program();
        $result = $program->where('id', '=', $request->out('id'))->update([
            'program_name'       => $request->out('program_name'),
            'program_tag'        => $request->out('program_tag'),
            'program_price'      => $request->out('program_price'),
            'program_sales_page' => $request->out('program_sales_page'),
            'program_status'     => $request->out('program_status'),
            'program_type'       => $request->out('program_type'),
            'program_image'      => $request->out('program_image'),
            'main_page'          => $request->out('main_page'),
            'discount_code'      => $request->out('discount_code'),
            'discount_price'     => $request->out('discount_price'),
            'plan_id'            => $request->out('plan_id')
        ]);

        $manager = new NrOfProgramSoldManager();
        $programs = $manager->run("");

        if($result == true)
        {
            Template::setAssign([
                'programs'     => $programs,
                'error'        => true,
                'errorType'    => 'success',
                'errorMessage' => 'Your product was updated with success.'
            ])->setDisplay("admin/products.tpl");
        } else {
            Template::setAssign([
                'programs'     => $programs,
                'error'        => true,
                'errorType'    => 'danger',
                'errorMessage' => 'Sorry something went wrong.'
            ])->setDisplay("admin/products.tpl");
        }
    }

    public function delete(Program $program)
    {
        $program->delete();

        $manager = new NrOfProgramSoldManager();
        $programs = $manager->run("");

        Template::setAssign([
            'programs' => $programs,
            'error' => true,
            'errorType' => 'success',
            'errorMessage' => 'Your product was DELETED.'
        ])->setDisplay("admin/products.tpl");
    }

    public function product(Program $program)
    {
        Template::setAssign([
            "program" => $program
        ])->setDisplay("admin/edit_product.tpl");
    }
}
