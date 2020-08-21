<?php
// Incluimos SDK MP
require __DIR__  . '/vendor/autoload.php';

// Credenciales ejercicio
MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

$MP_id_payment = $_GET["id"];


$postdata = file_get_contents("php://input");
// file_put_contents('json_orders/'.time().'.txt' , $postdata);
file_put_contents('json_orders/'.time().'.txt' , $postdata);


?>