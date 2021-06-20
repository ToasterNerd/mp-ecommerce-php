
 <?php
require 'vendor/autoload.php';
require_once 'credenciales.php';
    MercadoPago\SDK::setAccessToken($access_token);
 
    switch($_POST["type"]) {
        case "payment":
            $_POST = json_decode(file_get_contents('php://input'), true);
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

