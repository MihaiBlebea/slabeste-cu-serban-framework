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
    public function transactions()
    {
        $trans = new Transaction();
        $trans = $trans->selectAll();

        // Calculate sum of money
        $totalValue = 0;
        foreach(array_column($trans, "value") as $tran)
        {
            $totalValue += $tran;
        }

        foreach($trans as $tran)
        {
            $user = new User();
            $user = $user->where("username", "=", $tran->username)->selectOne();
            $tran->firstName = $user->first_name;
            $tran->lastName = $user->last_name;
        }

        Template::setAssign([
            "transactions"      => $trans,
            "transaction_count" => count($trans),
            "total_value"       => $totalValue,
            "error"             => false
        ])->setDisplay("admin/transactions.tpl");
    }

    public function search($method, $search)
    {
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

            foreach($trans as $tran)
            {
                $user = new User();
                $user = $user->where("username", "=", $tran->username)->selectOne();
                $tran->firstName = $user->first_name;
                $tran->lastName = $user->last_name;
            }

            Template::setAssign([
                'transactions'      => $trans,
                'transaction_count' => count($trans),
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
