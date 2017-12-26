<?php

namespace App\Controllers;

use App\GoogleApi\GoogleApi;
use Carbon\Carbon;
use Framework\Alias\Template;
use Framework\Router\Request;

class GoogleApiController
{
    public function display()
    {
        Template::setAssign([
            'error' => false
        ])->setDisplay("admin/analytics.tpl");
    }

    public function allSalesPage(Request $request = null)
    {
        $carbon = new Carbon();
        $google = new GoogleApi($carbon);
        $response = $google->init()
                           ->lastWeek()
                           ->dimensions("ga:date")
                           ->dimensions("ga:pagePath")
                           // ->dimensionFilter("ga:pagePath", ["/app/public/landing/talie-mai-subtire/", "/9-exercitii-pentru-fund-bombat/"], "IN_LIST")
                           ->segment('sessions::condition::ga:landingPagePath=@/sales-page')
                           ->order("ga:sessions")
                           ->metrics("ga:sessions")
                           ->getReport();
        $response = $google->print($response);

        $result = [];
        foreach($response as $key => $value)
        {
            $result[$value["ga:date"]][$value["ga:pagePath"]] = [
                "url"   => $value["ga:pagePath"],
                "count" => $value["ga:sessions"],
                "date"  => $value["ga:date"]];
        }
        returnJson($result);
    }
}
