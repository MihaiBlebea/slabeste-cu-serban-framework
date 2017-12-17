<?php

namespace App\Controllers;

use App\GoogleApi\GoogleApi;
use Carbon\Carbon;

class GoogleApiController
{
    public function display()
    {
        $carbon = new Carbon();

        $google = new GoogleApi($carbon);
        $response = $google->init()
                           ->lastWeek()
                           ->dimensions("ga:date")
                           ->dimensions("ga:pagePath")
                           ->dimensionFilter("ga:pagePath", ["/", "/10-alimente-care-te-ajuta-sa-slabesti-sanatos-chiar-daca-ai-un-buget-restrans/"], "IN_LIST")
                           ->order("ga:sessions")
                           ->metrics("ga:sessions")
                           ->getReport();

        dd($google->print($response));
    }
}
