<?php //con get agarro los valores que están en la URL
$collection_id =$_GET['collection_id'];
$external_reference =$_GET['external_reference'];
$preference_id =$_GET['preference_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aprobado</title>
</head>

<body>
    TU COMPRA FUE APROBADA (aca irian pasos siguientes a la aprobación de la compra, como servicio post venta por ejemplo)
    <?php
echo "<br>";
echo  "Collection_id = " . $collection_id ;
echo "<br>";
echo "external_reference = " . $external_reference;
echo "<br>";
echo "preference_id = " . $preference_id;
?>
</body>

</html>