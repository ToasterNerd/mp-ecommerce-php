
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

$info = [
 'id' => $_POST['id'],
 'type' => $_POST['type'],
 'action' => $_POST['action'],
 'user_id' =>$_POST['img']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notificaciones</title>
</head>
<body>
 hola wachines
 <div> 
 <?php echo $info["id"]; ?>
</div>
 </body>
</html>
