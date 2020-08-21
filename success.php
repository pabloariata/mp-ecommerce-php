<?php
// SDK de Mercado Pago
require __DIR__  . '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

if (!isset($_GET["collection_id"]) || !ctype_digit($_GET["collection_id"])) {
    http_response_code(400);
    return;
}

$MP_id_payment = $_GET["collection_id"];
$MP_order_info = null;

$payment = new MercadoPago\Payment;
$MP_order_info = $payment::find_by_id($MP_id_payment);
?>
<!DOCTYPE html>
<html
    class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser"
    lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/fonts" media="">
    <style>
        .as-filter-button-text {
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }

        .row.as-fixed-nav {
            border-bottom: 1px solid #ddd;
        }

        .as-producttile-tilehero.with-paddlenav.with-paddlenav-onhover {
            height: 330px;
        }

        .as-footnotes {
            background: #333;
            color: #fff;
            padding: 16px 40px;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
</head>



<body class="as-theme-light-heroimage">

    <div class="stack">

        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320"
                                        data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306"
                                        class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">

                                    <button class="as-filter-button" aria-expanded="true"
                                        aria-controls="as-search-filters" type="button">
                                        <h2 class=" as-filter-button-text">
                                            Operación exitosa
                                        </h2>
                                    </button>


                                </div>

                            </div>
                        </div>
                        <div class="as-accessories-results  as-search-desktop">
                            <div class="width:60%" style="text-align:center; padding:100px">
                                <strong>collection_id:</strong> <? echo $_GET['collection_id'] ?><br>
                                <strong>external_reference:</strong> <? echo $_GET['external_reference'] ?><br>
                                <strong>payment_type_id:</strong> <? echo $_GET['payment_type'] ?><br>
                                <strong>payment_method_id:</strong> <? echo $MP_order_info->payment_method_id ?><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
        <div class="as-footnotes">
            <div class="as-footnotes-content">
                <div class="as-footnotes-sosumi">
                    Todos los derechos reservados Tienda Tecno <?=date('Y')?>
                </div>
            </div>
        </div>

    </div>


    <script src="https://www.mercadopago.com/v2/security.js" view=""></script>
</body>

</html>