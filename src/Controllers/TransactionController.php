<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Model\User;
use InstaRouter\Model\Account;
use InstaRouter\Model\Program;
use InstaRouter\Model\Transaction;
use InstaRouter\Router\Request;

class TransactionController extends Controller
{
    public function getTransactions()
    {
        $trans = new Transaction();
        $trans = $trans->where('id', '>', 0)->select("array");

        $this->sendTransactionsToView($trans);
    }

    private function sendTransactionsToView($trans)
    {
        $totalValue = 0;
        foreach($trans as $tran)
        {
            $totalValue += $tran['value'];
        }

        $this->smarty->assign([
            'transactions'      => $trans,
            'transaction_count' => count($trans),
            'total_value'       => $totalValue,
            'error'             => false
        ]);
        $this->smarty->display("admin/transactions.tpl");
    }

    public function search($method, $search)
    {
        $trans = new Transaction();
        if($method == 'username')
        {
            $trans = $trans->where('username', '=', $search)->select("array");
        }

        if($method == 'email')
        {
            $user = new User();
            $user = $user->where('email', '=', $search)->select();
            $trans = $trans->where('username', '=', $user['username'])->select("array");
        }

        if($method == 'program_tag')
        {
            $trans = $trans->where('program_tag', '=', $search)->select("array");
        }

        if($trans)
        {
            $this->sendTransactionsToView($trans);
        } else {
            $this->smarty->assign([
                'error'             => true,
                'errorType'         => 'danger',
                'errorMessage'      => 'Could not find any transactions'
            ]);
            $this->smarty->display("admin/transactions.tpl");
        }
    }
}
