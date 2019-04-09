<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include("vehiculos.php");
$mazda = new Coche();

$pegaso=new Camion();
echo "el maszda tiene " . $mazda->ruedas . " ruedas <br>";

echo "el pedaso tiene " . $pegaso->ruedas . " ruedas <br>";

$pegaso->frenar();

$mazda->establece_color(1,'polo');
?>

</body>
</html>