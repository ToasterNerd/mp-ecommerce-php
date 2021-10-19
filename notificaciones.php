<?php
require 'vendor/autoload.php';
require_once 'credenciales.php';
 
MercadoPago\SDK::setAccessToken($access_token);

 $_POST = json_decode(file_get_contents('php://input'), true);
http_response_code(200);


echo $_POST['id']." ";
echo $_POST['live_mode']." ";
echo $_POST['type']." ";
echo $_POST['date_created']." ";
echo $_POST['application_id']." ";
echo $_POST['user_id']." ";
echo $_POST['version']." ";
echo $_POST['api_version']." ";
echo $_POST['action']." ";
echo $_POST['data']['id']." ";

//ACA LE DARÍA EL USO QUE EL CLIENTE REQUERRIRÍA A LOS DATOS RECIBIDOS EN JSON. (ENVIAR A BBDD por ejemplo)
class BaseDatos extends SQLite3
{ //creo un objeto  bbdd sqlite
    public function __construct()
    {
        $this->open('infoPagos.db');
    }
}

$db = new BaseDatos();//creo la bbdd

if ($db) {//verifico si se creo o no
    echo "<p> la base de datos se creó en forma exitosa";
} else {
    echo "<p> Error, la  base de datos no se creó";
}


//CARGO LA TABLA
$q = <<<sql
CREATE TABLE if not exists tableINFO
(ID int,
LIVE_MODE integer,
TYPE text,
DATE_CREATED text,
APPLICATION_ID double,
USER_ID double,
VERSION int,
API_VERSION text,
ACTION text,
DATA_ID text);
sql;

$r = $db->exec($q); //ejecuto el query en la bbdd y recibo la respuesta

if ($r) {//verifico si se creo o no la tabla
    echo "<p> La Tabla de la base de datos se creó en forma exitosa";
} else {
    echo "<p> Error, la tabla de la base de datos no se creó";
}

//CARGO LOS DATOS A LA TABLA
$id = $_POST['id'];
$live_mode = $_POST['live_mode'];
$type = $_POST['type'];
$date_created = $_POST['date_created'];
$application_id = $_POST['application_id'];
$user_id = $_POST['user_id'];
$version = $_POST['version'];
$api_version = $_POST['api_version'];
$action = $_POST['action'];
$id_pago = $_POST['data']['id'];

//otra forma de hacer el query
$db->exec("INSERT INTO tableINFO VALUES('".$id."','".$live_mode."','".$type."','".$date_created."','".$application_id."','".$user_id."','".$version."','".$api_version."','".$action."','".$id_pago."')");



$db->close();//cierro la bbdd despues de realizar el trabajo

?>
