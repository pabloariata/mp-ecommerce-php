<?php
// SDK de Mercado Pago
require __DIR__  . '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

if (!isset($_GET["id"]) || !ctype_digit($_GET["id"])) {
    http_response_code(400);
    return;
}

$MP_id_payment = $_GET["id"];
$MP_order_info = null;

$payment = new MercadoPago\Payment;
$MP_order_info = $payment::find_by_id($MP_id_payment);

if(!empty($MP_order_info)){
    $MP_order_info_json =  str_replace("\u0000*\u0000", "", json_encode((array) $MP_order_info, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    file_put_contents('json_orders/'.$MP_id_payment.'.txt' , $MP_order_info_json);
    echo "<pre>".print_r($MP_order_info, true)."</pre>";exit;
}else{
    die("Se ha producido un error!");
}

?>