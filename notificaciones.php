<?php
require 'vendor/autoload.php';
require_once 'credenciales.php';

MercadoPago\SDK::setAccessToken($access_token);

        $payment = new MercadoPago\Payment.find_by_id($_POST["id"]);
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
    <?php echo $payment;
     ?>
</body>
</html>