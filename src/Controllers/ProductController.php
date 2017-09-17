<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Model\User;
use InstaRouter\Model\Account;
use InstaRouter\Model\Program;
use InstaRouter\Model\Transaction;
use InstaRouter\Router\Request;

class ProductController extends Controller
{
    public function index()
    {
        $this->smarty->display("admin/index.tpl");
    }

    private function processProducts()
    {
        $program = new Program();
        $programs = $program->where('id', '>', 0)->select('array');

        $transaction = new Transaction();
        $result = array();
        foreach($programs as $program)
        {
            $items = $transaction->where('program_tag', '=', $program['program_tag'])->select('array');
            $program['clients'] = count($items);
            array_push($result, $program);
        }
        return $result;
    }

    public function products()
    {
        $result = $this->processProducts();

        $this->smarty->assign([
            "programs" => $result,
            'error' => false
        ]);
        $this->smarty->display("admin/products.tpl");
    }

    public function postProduct(Request $request)
    {
        $program = new Program();
        $result = $program->where('id', '=', $request->retrive('id'))->update([
            'program_name'       => $request->retrive('program_name'),
            'program_tag'        => $request->retrive('program_tag'),
            'program_price'      => $request->retrive('program_price'),
            'program_sales_page' => $request->retrive('program_sales_page'),
            'program_status'     => $request->retrive('program_status'),
            'program_type'       => $request->retrive('program_type'),
            'program_image'      => $request->retrive('program_image'),
            'main_page'          => $request->retrive('main_page'),
            'discount_code'      => $request->retrive('discount_code'),
            'discount_price'     => $request->retrive('discount_price'),
            'plan_id'            => $request->retrive('plan_id')
        ]);

        $result = $this->processProducts();

        if($result == true)
        {
            $this->smarty->assign([
                'programs' => $result,
                'error' => true,
                'errorType' => 'success',
                'errorMessage' => 'Your product was updated with success.'
            ]);
        } else {
            $this->smarty->assign([
                'programs' => $result,
                'error' => true,
                'errorType' => 'danger',
                'errorMessage' => 'Sorry something went wrong.'
            ]);
        }

        $this->smarty->display("admin/products.tpl");
    }

    public function deleteProduct($id)
    {
        $program = new Program();
        $program->where('id', '=', $id)->delete();

        $result = $this->processProducts();

        $this->smarty->assign([
            'programs' => $result,
            'error' => true,
            'errorType' => 'success',
            'errorMessage' => 'Your product was DELETED.'
        ]);
        $this->smarty->display("admin/products.tpl");
    }

    public function product($tag)
    {
        $program = new Program();
        $program = $program->where('program_tag', '=', $tag)->select();

        $this->smarty->assign([
            "program" => $program
        ]);
        $this->smarty->display("admin/edit_product.tpl");

    }
}
