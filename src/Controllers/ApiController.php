<?php

namespace App\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;

class ApiController
{
    public function getTransactions()
    {
        $trans = new Transaction();
        $trans = $trans->selectAll();

        $start = Carbon::now()->subDays(30);
        for ($i = 0 ; $i <= 30; $i++)
        {
            $dates[$start->copy()->addDays($i)->toDateString()] = 0;
        }
        // dd($trans);

        foreach($trans as $index => $tran)
        {
            $regDate = Carbon::parse($tran->reg_date)->toDateString();
            if($regDate > $start)
            {
                $dates[$regDate] += $tran->value;
            }
        }
        $result = json_encode($dates);
        echo $result;
    }
}
