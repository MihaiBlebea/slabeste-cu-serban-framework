<?php

namespace App\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use App\Autoresponder\Autoresponder;
use Framework\Router\Request;

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

    public function autoresponder(Request $request)
    {
        $name        = $request->out("name");
        $email       = $request->out("email");
        $list        = $request->out("list");
        $automation  = $request->out("automation");
        $tag         = $request->out("tag");

        // Store the new autoresponder client
        $autoresponder = new Autoresponder();
        $result = $autoresponder->addToList($list, $name, $email);

        if($result)
        {
            $contact_id = $result->subscriber_id;
        }

        if($result !== false)
        {
            if($automation !== null)
            {
                $result = $autoresponder->addToAutomation($contact_id, $automation);
            }

            if($tag !== null)
            {
                $result = $autoresponder->addTags($contact_id, [$tag]);
            }

            if($result !== false)
            {
                // echo json_encode(["response" => true]);
                returnJson(["response" => true, "code" => 200]);
            } else {
                returnJson(["response" => false, "code" => 200]);
            }
        }
        returnJson(["response" => false, "code" => 200]);
    }
}
