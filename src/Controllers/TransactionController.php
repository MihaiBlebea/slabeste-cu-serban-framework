<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Program;
use App\Models\Transaction;
use Framework\Router\Request;
use Framework\Alias\Template;

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

        $trans = new Transaction();
        $trans = $trans->selectAll();

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
            $tran->index = $index + 1;
        }

        // Apply pagination here
        $paginated = array_chunk($trans, 10);
        
        // Send informations to view
        Template::setAssign([
            "transactions"        => $paginated[$page],
            "paginateCount"       => count($paginated),
            "previousPage"        => $page,
            "nextPage"            => $page + 2,
            "transaction_count"   => count($trans),
            "total_value"         => $totalValue,
            "error"               => false
        ])->setDisplay("admin/transactions.tpl");
    }

    public function search($method, $search, Request $request = null)
    {
        // Set and get pagination
        if($request !== null && $request->out("page") !== null)
        {
            $page = $request->out("page") - 1;
        } else {
            $page = 0;
        }

        $trans = new Transaction();

        // Search by username
        if($method == 'username')
        {
            $trans = $trans->where('username', '=', $search)->select();
        }

        // Search by email
        if($method == 'email')
        {
            $user = new User();
            $user = $user->where('email', '=', $search)->select();
            $trans = $trans->where('username', '=', $user['username'])->select();
        }

        // Search by program tag
        if($method == 'program_tag')
        {
            $trans = $trans->where('program_tag', '=', $search)->select();
        }

        // If there are any transactions
        if($trans)
        {
            $totalValue = 0;
            foreach(array_column($trans, "value") as $tran)
            {
                $totalValue += $tran;
            }

            foreach($trans as $index => $tran)
            {
                $user = new User();
                $user = $user->where("username", "=", $tran->username)->selectOne();
                $tran->firstName = $user->first_name;
                $tran->lastName = $user->last_name;

                // Add index to the object shadow property
                $tran->index = $index + 1;
            }

            // Apply pagination here
            $paginated = array_chunk($trans, 10);

            Template::setAssign([
                'transactions'      => $paginated[$page],
                'transaction_count' => count($trans),
                "paginateCount"     => count($paginated),
                "previousPage"      => $page,
                "nextPage"          => $page + 2,
                'total_value'       => $totalValue,
                'error'             => false
            ])->setDisplay("admin/transactions.tpl");
        } else {
            Template::setAssign([
                'error'             => true,
                'errorType'         => 'danger',
                'errorMessage'      => 'Could not find any transactions'
            ])->display("admin/transactions.tpl");
        }
    }
}
