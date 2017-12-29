<?php

namespace App\Controllers;

use App\GoogleApi\GoogleApi;
use Framework\Alias\Template;
use Framework\Router\Request;
use Framework\Injectables\Injector;

class GoogleApiController
{
    public function display()
    {
        Template::setAssign([
            'error' => false
        ])->setDisplay("admin/analytics.tpl");
    }

    public function getPageType($type, Request $request = null)
    {
        if($request !== null)
        {
            $date_start = $request->out("dateStart");
            $date_end   = $request->out("dateEnd");
            $metric     = $request->out("metric");

            $config = Injector::resolve("Config");
            $pages = $config->getConfig("google")["pages"][$type];

            $google = Injector::resolve("GoogleApi");
            $response = $google->init()
                               // ->lastWeek()
                               ->interval($date_start, $date_end)
                               ->dimensions("ga:date")
                               ->dimensions("ga:pagePath")
                               ->dimensionFilter("ga:pagePath", $pages, "IN_LIST")
                               ->order("ga:date")
                               ->metrics($metric)
                               ->getReport();
            $response = $google->print($response);

            returnJson($response);
        }
        returnJson(["result" => "Not a valid request"]);
    }

    public function getFunnel($name, Request $request)
    {
        dd($name);
    }
}
