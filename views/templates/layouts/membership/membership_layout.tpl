
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        
        <title>{$app_name}</title>
        <script src="https://unpkg.com/popper.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
            .nav.top {
                background-color: #0A82C5;
                color:white;
                z-index: 3;
                overflow: hidden;
                position: fixed;
                top: 0;
                width: 100%;
            }
            .nav-item.top:hover {
                color: yellow;
            }
            .sidebar-link-item {
                transition: all 0.3s ease-in-out;
            }
            .sidebar-link-item:hover {
                color: #1B6389;
                font-weight: bold;
            }
            .sidebar {
                position: fixed;
                /*padding: 50px 20px;*/
                border-right: solid 0.6px grey;
                background-color: white;
                height: 100%;
                text-align: center;
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
            .jumbotron {
                background-color:#ffffff;
            }
            .button-center {
                margin:auto;
                display:block;
            }
            .program-details {
                padding:5px 0px;
            }

            .program-section {
                max-width:80%;
                margin:auto;
                margin-bottom:30px;
            }
            .text-section {
                margin:20px auto;
            }
            .video-section {
                margin:20px auto;
            }
            .subtitle-section {

            }
            .exercise-section {
                list-style: none;
                padding:0;
            }
            .other-programs-section {

            }
            .download-card-img {
                display: block;
                margin: auto;
                max-width: 300px;
                max-height: 350px;
                transition: all 0.6s ease-in-out;
            }
            .download-card-img:hover {
                opacity: 0.6;
            }
            .display-3 {
                font-size: 3rem;
            }
            .img-content {
                max-width:700px;
            }
            .content-link {
                color:blue;
                margin-bottom:20px;
            }
            .image-program-footer {
                filter: grayscale(100%);
                transition: all 0.8s ease-in-out;
            }
            .image-program-footer:hover {
                filter: grayscale(0%);
            }
            #sticky-sidebar {
            	margin-top:10px;
            	position:fixed;
            	max-width: 20%;
            	border-right: solid 1px grey;
            	height:100%;
            	z-index:2;
            }
            #main {
                max-width: 80%;
                margin-left: 20%;
            }
            .sidebar-content {
                height: 60%;
                overflow: auto;
                overflow-x: hidden;
            }
            .sidebar-program-image {
                max-width: 100%;
            }
            .menu-desktop {
                display:flex;
            }
            .menu-mobile {
                display:none
            }
            /* Mobile version */
            @media only screen and (max-width: 1000px) {
                .sidebar {
                    display:none;
                }
                .menu-desktop {
                    display:none;
                }
                .menu-mobile {
                    display:block;
                    background-color: #0A82C5;
                    color:white;
                }
                .navbar {
                    justify-content: start;
                }
                .navbar-toggler {
                    border: 1px solid white;
                }
                #main {
                    max-width: 100%;
                    margin-left: 0px;
                }
            }
        </style>
    </head>
    <body>
        {include 'layouts/membership/membership_navigation.tpl'}
        <div class="container-fluid">
            <div class="row">
                <div style="padding:0px;" class="col-md-2 sidebar col-12 col-md-3 col-xl-2 bd-sidebar animated fadeInLeft" id="sticky-sidebar">
                    <img class="sidebar-program-image mt-4 mb-5" src="{$app_path}/{$program->program_image}" />
                    <div class="sidebar-content">
                        {foreach $chapters as $chapter}
                            <h5>{$chapter["name"]}</h5>
                            <nav class="nav flex-column">
                                {foreach $chapter['pages'] as $page}
                                    <a class="nav-link sidebar-link-item" href="{$app_path}/{$page['url']}">{$page['name']}</a>
                                {/foreach}
                            </nav>
                            <hr />
                        {/foreach}
                    </div>
                </div>
                {* <div class="col-md-2 sidebar" style="z-index: -1;position: relative;">
                </div> *}
                <div class="col-xs-12 col-sm-12" id="main">
                    {block name="body"}

                    {/block}

                    {if count($programs) > 0}
                        <div class="other-programs-section">
                            <h4>Acest program aduce rezultate maxime impreuna cu:</h4>
                            <div class="row">
                                {foreach $programs as $index => $program}
                                    {if $index < 4}
                                        <div class="card program-card" style="width: 15rem;">
                                            <a href="{$program->program_sales_page}">
                                                <img class="card-img-top image-program-footer" src="{$app_path}/{$program->program_image}">
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title" style="text-align:center;">{$program->program_name}</h5>
                                                <a href="{$program->program_sales_page}" class="btn btn-primary" style="display:block;margin:auto;">Afla mai multe</a>
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
        </div>

        <footer class="footer">
            Slabeste cu Serban
        </footer>
    </body>
<body>
