
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <style>
            .nav {
                background-color: #e5e5e5;
            }
            .container-fluid {
                max-width:900px;
                padding: 20px;
            }
            .btn {
                cursor: pointer;
            }
            .program-name {
                font-size: 1.9em;
                font-weight: bold;
            }
            .discount-price {
                font-size: 3.2em;
                font-weight: bold;
                color: #0A82C5;
                line-height: 1;
            }
            .normal-price {
                font-size: 3.2em;
                font-weight: bold;
                line-height: 1;
            }
            .discount-label-text {
                font-size:2em;
                margin-bottom:0px;
            }
            .old-price {
                color:grey;
            }
            .strike {
                text-decoration: line-through;
            }
            .text-shadow {
                text-shadow: 1px 2px 2px black;
            }
            .footer {
                padding:5px;
                background-color:#1B6389;
                color:#fff;
            }
            .guarantee {
                background-color: #F1F1F1;
            }
            .business-details {
                display: block;
                margin: auto;
                margin-left: 30px;
                border-left: 1px solid #d8cece;
                padding-left: 30px;
                padding-top: 20px;
                padding-bottom: 20px;
            }
        </style>
    </head>
    <body>
        {block name="nav"}

        {/block}

        {block name="body"}

        {/block}

        <footer class="footer">
            Slabeste cu Serban
        </footer>

        {block name="script"}

        {/block}
        <script>
            braintree.setup("{$braintree_token}", 'dropin', {
                container: 'dropin-container',
                form: 'checkout-form',
            });
        </script>
    </body>
<body>
