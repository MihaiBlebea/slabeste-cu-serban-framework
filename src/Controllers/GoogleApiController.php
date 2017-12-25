<?php

namespace App\Controllers;

use App\GoogleApi\GoogleApi;
use Carbon\Carbon;
use Framework\Alias\Template;
use Framework\Router\Request;

class GoogleApiController
{
    public function display(Request $request = null)
    {
        $carbon = new Carbon();
        $google = new GoogleApi($carbon);
        $response = $google->init()
                           ->lastWeek()
                           ->dimensions("ga:date")
                           ->dimensions("ga:pagePath")
                           ->dimensionFilter("ga:pagePath", ["/app/public/landing/talie-mai-subtire/", "/9-exercitii-pentru-fund-bombat/"], "IN_LIST")
                           ->order("ga:sessions")
                           ->metrics("ga:sessions")
                           ->getReport();

        dd($google->print($response));
        Template::setAssign([
            'data'  => $response,
            'error' => false
        ])->setDisplay("admin/analytics.tpl");
    }
}
