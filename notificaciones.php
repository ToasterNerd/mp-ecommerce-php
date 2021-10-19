
 <?php
require 'vendor/autoload.php';
require_once 'credenciales.php';
 
MercadoPago\SDK::setAccessToken($access_token);

 $_POST = json_decode(file_get_contents('php://input'), true);
http_response_code(200);


echo $_POST['id']."<br>";
echo $_POST['type']."<br>";
echo $_POST['date_created']."<br>";
echo $_POST['application_id']."<br>";
echo $_POST['user_id']."<br>";
echo $_POST['data']['id'];
//ACA LE DARÍA EL USO QUE EL CLIENTE REQUERRIRÍA A LOS DATOS RECIBIDOS EN JSON. (ENVIAR A BBDD por ejemplo)

?>

