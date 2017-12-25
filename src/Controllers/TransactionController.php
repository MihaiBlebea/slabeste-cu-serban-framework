<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Program;
use App\Models\Transaction;
use Framework\Router\Request;
use Framework\Alias\Template;
use Carbon\Carbon;

class TransactionController
{
    public function transactions(Request $request = null)
    {
        // Set and get pagination
        if($request !== null && $request->out("page") !== null)
        {
            $page = $request->out("page") - 1;
        } else {
            $page = 0;
        }

        // Process paginations
        $trans = new Transaction();
        $count = $trans->count();
        $limit = 10;

        $pages = $count / $limit;
        if(is_float($pages))
        {
            $pages = intval($pages) + 1;
        }

        // Get the paginated transactions
        if($request !== null && $request->out("mode") !== null && $request->out("search") !== null)
        {
            $search = $request->out("search");
            $mode = $request->out("mode");

            switch($mode)
            {
                case 'email':
                    $user = new User();
                    $user = $user->where('email', '=', $search)->selectOne();
                    if($user)
                    {
                        $trans = $trans->where('username', '=', $user->username)->sortBy('reg_date', 'DESC')->limitBy($limit, $limit * $page)->select();
                    }
                    break;
                case 'after_date':
                    $date = new Carbon($search);
                    $trans = $trans->where('reg_date', '>', $date->toDateTimeString())->sortBy('reg_date', 'DESC')->limitBy($limit, $limit * $page)->select();
                    break;
                default:
                    $trans = $trans->where($mode, '=', $search)->sortBy('reg_date', 'DESC')->limitBy($limit, $limit * $page)->select();
                    break;
            }

        } else {
            $trans = $trans->sortBy('reg_date', 'DESC')->limitBy($limit, $limit * $page)->selectAll();
        }

        // Calculate sum of money
        $totalValue = 0;
        foreach(array_column($trans, "value") as $tran)
        {
            $totalValue += $tran;
        }

        // $indexedTrans = array();
        foreach($trans as $index => $tran)
        {
            $user = new User();
            $user = $user->where("username", "=", $tran->username)->selectOne();
            if($user)
            {
                $tran->firstName = $user->first_name;
                $tran->lastName = $user->last_name;
            }
            // Add index to the object shadow property
            $tran->index = ($page * $limit) + $index + 1;
        }

        // Send informations to view
        Template::setAssign([
            "transactions"        => $trans,
            "paginateCount"       => $pages,
            "previousPage"        => $page,
            "nextPage"            => $page + 2,
            "transaction_count"   => count($trans),
            "total_value"         => $totalValue,
            "error"               => false,
            "options"             => ['program_tag', 'username', 'email', 'after_date']
        ])->setDisplay("admin/transactions.tpl");
    }
}
