<?php

namespace App\Controllers;

use Framework\Factory\EmailFactory;
use App\Models\Transaction;
use App\Models\Program;
use Carbon\Carbon;

class CronController
{
    public function sendDailyEmailToAdmin()
    {
        $yesterday = Carbon::yesterday();
        $yesterday = $yesterday->toDateTimeString();

        $today = Carbon::today()->toDateString();

        $transaction = new Transaction;
        $trans = $transaction->where("reg_date", ">", $yesterday)->select();

        $program = new Program();
        $programs = $program->where("program_price", ">", 0)->select();

        $total_money = 0;

        foreach($trans as $tran)
        {
            $total_money += $tran->value;
        }

        $result = [];

        foreach($programs as $program)
        {
            // $program->program_tag = "tabata-trainer";
            $prog_trans = $transaction->where("reg_date", ">", $yesterday)->where("program_tag", "=", $program->program_tag)->select();

            if($prog_trans !== false)
            {
                $money = 0;
                foreach($prog_trans as $prog_tran)
                {
                    $money += $prog_tran->value;
                }
                // dd($total_money);
                $result[$program->program_tag] = [
                    "money"   => $money,
                    "count" => count($prog_trans)
                ];
            }
        }

        $payload = [
            "date"           => $today,
            "count_products" => count($trans),
            "total_money"    => $total_money,
            "programs"       => $result
        ];

        $email = EmailFactory::build("DailyAdmin");
        $email->send($payload);
    }
}
