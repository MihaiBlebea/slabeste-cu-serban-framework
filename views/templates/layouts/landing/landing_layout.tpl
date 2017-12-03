
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <title>{$app_name}</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>

        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="{$app_path}/css/social-media-buttons.css">
        <link rel="stylesheet" href="{$app_path}/css/landing-page.css">
    </head>
    <body>
        <!-- Include the navigation component-->
        {include 'layouts/landing/landing_navigation.tpl'}

        {block name="body"}

        {/block}

        {include "partials/landing-footer.tpl"}

        <script src="{$app_path}/js/functions.js"></script>
        <script src="{$app_path}/js/localStorage.js"></script>
        <script src="{$app_path}/js/tracking.js"></script>
        {block name="script"}

        {/block}
    </body>
<body>
