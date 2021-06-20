
 <?php
require 'vendor/autoload.php';
require_once 'credenciales.php';
 
MercadoPago\SDK::setAccessToken($access_token);

 $_POST = json_decode(file_get_contents('php://input'), true);
http_response_code(200);


echo $_POST['id'];
//ACA LE DARÍA EL USO QUE EL CLIENTE REQUERRIRÍA A LOS DATOS RECIBIDOS EN JSON. (ENVIAR A BBDD por ejemplo)

?>

