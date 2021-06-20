
 <?php
require 'vendor/autoload.php';
require_once 'credenciales.php';
    MercadoPago\SDK::setAccessToken($access_token);

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["live_mode"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["type"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["date_created"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["aplication_id"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["user_id"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["version"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["api_version"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["action"]);
            $payment = MercadoPago\Payment.find_by_id($_POST["data"]["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }
//ACA LE DARÍA EL USO QUE EL CLIENTE REQUERRIRÍA A LOS DATOS RECIBIDOS EN JSON. (ENVIAR A BBDD por ejemplo)
http_response_code(200);
//echo json_encode($payment());
?>

