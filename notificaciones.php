
 <?php
require 'vendor/autoload.php';
require_once 'credenciales.php';
    MercadoPago\SDK::setAccessToken($access_token);

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
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

    $direccion=__DIR__;
    $info =array("payment_id"=>$payment);          
   /* $infojson=json_encode($info);
    $file = $direccion . "direccion";
    file_put_contents($file, $infojson);*/

  echo $info["payment_id"];

?>

