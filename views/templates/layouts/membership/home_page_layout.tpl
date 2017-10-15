
<html>
    <head>
        <title>{$app_name}</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <style>
            body {

            }
            a {
                text-decoration: none;
                color: inherit;
            }
            a:hover {
                color: inherit;
            }
            a.card-link {
                color: #0A82C5;
            }
            a.card-link:hover {
                color: #0A82C5;
                font-weight: bold;
            }
            .nav {
                background-color: #0A82C5;
                color:white;
                z-index: 3;
                overflow: hidden;
                position: fixed;
                top: 0;
                width: 100%;
            }
            .nav-item:hover {
                color: yellow;
            }
            .sidebar {
                position: fixed;
                padding: 50px 20px;
                background-color: #DBDBD9;
                height: 100%;
            }
            .content {
                padding:70px 50px;
            }
            .footer {
                padding:5px;
                background-color:#1B6389;
                color:#fff;
            }
            .program-card {
                margin:10px;
            }
            .content {
                max-width: 1100px;
                display:block;
                margin:auto;
            }
            .jumbotron {
                background-color:#ffffff;
                padding-left:0px;
                padding-right:0px;
                margin:0;
            }
            .program-main-image {
                transition: all 0.6s ease-in-out;
            }
            .program-main-image:hover {
                opacity: 0.6;
            }
            .program-main-image-not-owned {
                filter: grayscale(100%);
                transition: all 0.8s ease-in-out;
            }
            .program-main-image-not-owned:hover {
                filter: grayscale(0%);
            }
        </style>
    </head>
    <body>
        {include 'layouts/membership/membership_home_navigation.tpl'}
        <div class="container-fluid">
            <div class="content">
                {block name="body"}

                {/block}
            </div>
        </div>
        <footer class="footer">
            Slabeste cu Serban
        </footer>

        {block name="script"}

        {/block}
    </body>
<body>
