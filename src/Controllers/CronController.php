<?php

namespace App\Controllers;

use Framework\Factory\EmailFactory;

class CronController
{
    public function sendDailyEmailToAdmin()
    {
        $email = EmailFactory::build("DailyAdmin");
        $email->send("Serban");
    }
}
