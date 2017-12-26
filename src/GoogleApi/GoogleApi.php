<?php

namespace App\GoogleApi;

use Framework\Injectables\Injector;
use Carbon\Carbon;

class GoogleApi
{
    private $config;

    private $carbon;

    private $client;

    public $dateRange;

    public $order = null;

    private $dimensions = [];

    private $dimensionFilter = null;

    private $dimensionFilterClause = null;

    private $metrics = null;

    private $segment = null;

    private $analytics;

    public function __construct(Carbon $carbon)
    {
        $this->carbon = $carbon;
        $this->config = Injector::resolve("Config");
    }

    public function init()
    {
        // Get the config app_path
        $google_config_path = $this->config->getConfig("google")["google_config_path"];

        // Create and configure a new client object.
        $this->client = new \Google_Client();
        $this->client->setApplicationName("ScS Google App");
        $this->client->setAuthConfig($google_config_path);
        $this->client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
        $this->analytics = new \Google_Service_AnalyticsReporting($this->client);

        return $this;
    }

    public function interval($date_start = "7daysAgo", $date_end = "today")
    {
        $this->dateRange = new \Google_Service_AnalyticsReporting_DateRange();
        $this->dateRange->setStartDate($date_start);
        $this->dateRange->setEndDate($date_end);
        return $this;
    }

    public function lastWeek()
    {
        $this->interval("7daysAgo", "today");
        return $this;
    }

    public function lastMonth()
    {
        $this->interval("30daysAgo", "today");
        return $this;
    }

    public function dimensions($dim)
    {
        $dimension = new \Google_Service_AnalyticsReporting_Dimension();
        $dimension->setName($dim);
        array_push($this->dimensions, $dimension);
        return $this;
    }

    public function metrics($metric, $alias = null)
    {
        $this->metrics = new \Google_Service_AnalyticsReporting_Metric();
        $this->metrics->setExpression($metric);
        $this->metrics->setAlias($alias);
        return $this;
    }

    public function metricType($type)
    {
        $this->metrics->setFormattingType($type);
        return $this;
    }

    public function segment($id)
    {
        $this->segment = new \Google_Service_AnalyticsReporting_Segment();
        $this->segment->setSegmentId($id);
        array_push($this->dimensions, $this->segmentDimension());
        // dd($this->segmentDimension());
        return $this;
    }

    private function segmentDimension()
    {
        $segmentDimensions = new \Google_Service_AnalyticsReporting_Dimension();
        $segmentDimensions->setName("ga:segment");
        return $segmentDimensions;
    }

    public function order($value, $order = "VALUE", $type = "DESCENDING")
    {
        $this->order = new \Google_Service_AnalyticsReporting_OrderBy();
        $this->order->setFieldName($value);
        $this->order->setOrderType($order);
        $this->order->setSortOrder($type);
        return $this;
    }

    public function dimensionFilter($dimension, array $value, $operator = "IN_LIST")
    {
        $this->dimensionFilter = new \Google_Service_AnalyticsReporting_DimensionFilter();
        $this->dimensionFilter->setDimensionName($dimension);
        $this->dimensionFilter->setOperator($operator);
        $this->dimensionFilter->setExpressions($value);

        $this->dimensionFilterClause = new \Google_Service_AnalyticsReporting_DimensionFilterClause();
        $this->dimensionFilterClause->setFilters(array($this->dimensionFilter));
        // dd($this->dimensionFilterClause);
        $this->dimensions($dimension);

        return $this;
    }

    public function passObject($request)
    {
        $body = new \Google_Service_AnalyticsReporting_GetReportsRequest();
        $body->setReportRequests(array($request));
        $result = $this->analytics->reports->batchGet($body);

        return $result;
    }

    public function getReport()
    {
        // get the viewId from config file.
        $view_id = $this->config->getConfig("google")["google_view_id"];;

        // Create the ReportRequest object.
        $request = new \Google_Service_AnalyticsReporting_ReportRequest();
        $request->setViewId($view_id);
        $request->setDateRanges($this->dateRange);
        $request->setDimensions($this->dimensions);
        $request->setDimensionFilterClauses(array($this->dimensionFilterClause));
        $request->setMetrics(array($this->metrics));
        // $request->setIncludeEmptyRows(true);
        $request->setSegments(array($this->segment));
        $request->setOrderBys($this->order);

        $body = new \Google_Service_AnalyticsReporting_GetReportsRequest();
        $body->setReportRequests(array($request));

        $result = $this->analytics->reports->batchGet($body);
        // Reset the object properties to default

        return $result;
    }

    public function print($reports)
    {
        for ( $reportIndex = 0; $reportIndex < count( $reports ); $reportIndex++ )
        {
            $report = $reports[ $reportIndex ];
            $header = $report->getColumnHeader();
            $dimensionHeaders = $header->getDimensions();
            $metricHeaders = $header->getMetricHeader()->getMetricHeaderEntries();
            $rows = $report->getData()->getRows();

            for ( $rowIndex = 0; $rowIndex < count($rows); $rowIndex++)
            {
                $result[$rowIndex] = [];

                $row = $rows[ $rowIndex ];
                $dimensions = $row->getDimensions();
                $metrics = $row->getMetrics();

                for ($i = 0; $i < count($dimensionHeaders) && $i < count($dimensions); $i++)
                {
                    $result[$rowIndex][$dimensionHeaders[$i]] = $dimensions[$i];
                }

                for ($j = 0; $j < count($metrics); $j++)
                {
                    $values = $metrics[$j]->getValues();

                    for ($k = 0; $k < count($values); $k++)
                    {
                        $entry = $metricHeaders[$k];
                        $result[$rowIndex][$entry->getName()] = $values[$k];
                    }
                }
            }
        }
        return $result;
    }

}
