
<html>
    <head>
        <title>{$app_name}</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <script src="https://unpkg.com/popper.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="{$app_path}/css/membership.css">
    </head>
    <body>
        {include 'layouts/membership/membership_navigation.tpl'}
        <div class="container-fluid">
            <div class="row">
                <!-- Here is the partial for the sidebar -->
                {include 'partials/membership-sidebar.tpl' chapters=$chapters}

                <div class="col-xs-12 col-sm-12" id="main">

                    <div class="mt-5 d-lg-none">
                        {include "partials/notification.tpl"
                            message="Acceseaza celelalte pagini din meniul <i class='fa fa-bars' aria-hidden='true'></i>"
                            type="primary"}
                    </div>

                    <!-- Here is the slot for the body -->
                    {block name="body"}{/block}

                    <!-- Here is the partial for the recomanded programs-->
                    {if count($programs) > 0}
                        {include 'partials/membership-recomanded-programs.tpl' programs=$programs}
                    {/if}
                </div>
            </div>
        </div>

        <footer class="footer">
            Slabeste cu Serban
        </footer>
    </body>
<body>
