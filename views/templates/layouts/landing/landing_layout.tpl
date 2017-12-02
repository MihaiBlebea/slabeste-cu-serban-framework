
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        
        <title>{$app_name}</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js"></script>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="{$app_path}/css/social-media-buttons.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>

        <style>
            a {
                text-decoration: none;
                color: inherit;
            }
            a:hover {
                color: inherit;
                cursor: pointer;
            }
            a.card-link {
                color: #0A82C5;
            }
            a.card-link:hover {
                color: #0A82C5;
                font-weight: bold;
            }
            .nav {
                /*background-color: #0A82C5;*/
                background-color: white;
                color:black;
                z-index: 3;
                overflow: hidden;
                position: fixed;
                top: 0;
                width: 100%;
                display: flex;
                align-items: center;
            }
            .nav-item {
                font-weight: bold;
            }
            .nav-item:hover {
                color: #0A82C5;
                padding:0px auto;
            }
            .container-fluid {
                margin-top:10px;
            }
            .btn {
                cursor: pointer;
            }
            .offer {
                margin:auto;
                max-width:900px;
            }
            .background-offer {
                background-image: url('https://image.freepik.com/free-photo/sport-active-running-fitness-background_1220-1011.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                margin-left: -15px;
                margin-right: -15px;
            }
            .card {
                position:relative;
                z-index:2;
                margin-top:70px;
                margin-bottom:70px;
            }
            .card-body {
                text-align: center;
                background-color:rgb(255,255,255,0.4);
                text-transform: uppercase;
            }
            .offer-text-1 {
                font-size:3em;
            }
            .offer-text-2 {
                font-size:2em;
            }
            .offer-text-3 {
                font-size:2em;
            }
            .close {
                cursor:pointer;
            }
            .row.steps {
                background-color: #1b6389;
                padding: 20px 0px;
            }
            .steps-container {
                max-width: 900px;
                width: 100%;
                display: flex;
                justify-content: space-around;
                margin: auto;
            }
            .step-number {
                font-size: 3.2em;
                color:yellow;
                font-weight:bold;
                padding-right:0;
            }
            .step-text {
                padding-left:2px;
            }
            .step-title {
                font-size: 1.5em;
                color:yellow;
            }
            .step-content {
                color:#fff;
            }
            .row.benefits {
                padding-top:50px;
                background-color: #0A82C5;
                color: #fff;
            }
            .bullet-point-benefits {
                max-width:900px;
                margin:auto;
            }
            .benefit-item {
                padding:15px 0px;
            }
            button {
                cursor:pointer;
            }
            .row.testimonials {
                padding: 50px 0px;
            }
            .testimonials {
                max-width:900px;
                margin: auto;
            }
            .testimonial-image {
                max-width: 200px;
            }
            hr {
                margin: 50px 0px;
            }
            .jumbotron {
                background-color:inherit;
            }
            .img-logo {
                max-height: 35px;
            }
            .text-center {
                text-align: center;
            }
            footer {
                height:60px;
                background-color: #0A82C5;
                color:white;
                padding:20px;
            }
            .social-buttons-container {
                display: flex;
                justify-content: flex-end;
            }
        </style>
    </head>
    <body>
        <!-- Include the navigation component-->
        {include 'layouts/landing/landing_navigation.tpl'}

        {block name="body"}

        {/block}

        <footer style="display:flex;align-items:center;" class="footer">
                <div class="col">
                    Slabeste Cu Serban
                </div>
                <div class="col social-buttons-container">
                    <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                    <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                    <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                    <a href="#" class="icon-button youtube"><i class="fa fa-youtube"></i><span></span></a>
                    <a href="#" class="icon-button pinterest"><i class="fa fa-pinterest"></i><span></span></a>
                </div>
        </footer>

        <script src="{$app_path}/js/functions.js"></script>
        <script src="{$app_path}/js/localStorage.js"></script>
        <script src="{$app_path}/js/tracking.js"></script>
        {block name="script"}

        {/block}
    </body>
<body>
