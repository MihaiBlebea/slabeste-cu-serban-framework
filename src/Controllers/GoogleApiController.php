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

    public function customSegment(Request $request = null)
    {
        $segments = [
            "all-sale-pages"   => "sessions::condition::ga:landingPagePath=@/sales-page",
            "all-landing-pages" => "sessions::condition::ga:landingPagePath=@/lm"
        ];

        $segment = $segments[$request->out('request')];

        $carbon = new Carbon();
        $google = new GoogleApi($carbon);
        $response = $google->init()
                           ->lastWeek()
                           ->dimensions("ga:date")
                           ->dimensions("ga:pagePath")
                           // ->dimensionFilter("ga:pagePath", ["/app/public/landing/talie-mai-subtire/", "/9-exercitii-pentru-fund-bombat/"], "IN_LIST")
                           ->segment($segment)
                           ->order("ga:sessions")
                           ->metrics("ga:sessions")
                           ->getReport();
        $response = $google->print($response);

        $result = [];
        foreach($response as $key => $value)
        {
            // $date = Carbon::parse($value["ga:date"]);
            $result[$key] = [
                "url"   => $value["ga:pagePath"],
                "count" => $value["ga:sessions"],
                "date"  => Carbon::parse($value["ga:date"])->toDateString()];
        }
        returnJson($result);
    }
}
