<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.resaltar{
			color:#F00;
			font-weight: bold;
		}


	</style>
</head>
<body>

<?php 
include ("poo.php");

	print "Bienvenidos al curso de php <br>";
	print "Hola gente <br>";
	print "Hasta el proximo video <br>";
	$nombre="juans";
 dameDatos();
	$edad=18;
	//print "el nombre del usuario" . $nombre . "y tiene" . $edad . "años <br>";
	echo $nombre;

	echo "este es el primer mensaje <br>";


	function dameDatos(){
		global $nombre;
		$nombre="funcion, el nombre es " . $nombre;
	}

	//aca llamas la funcion
 

	echo "este es el segundo mensjae <br>";
  pood();


  contador();
  contador();
  contador();
  contador();


$nombree="carlos";

echo  "tu nomnbre es $nombree";

echo "<p class='resaltar'>esto es un un ejemplo de frase</p> <br><br><br>";


$variable1="CASA";
$variable2="CASA";
$resultado1=strcmp($variable1, $variable2);//devuelve 1 si no son igual. 0si son iguales
$resultado2=strcasecmp($variable1, $variable2);//devuelve 1 si no son igual. 0si son iguales
echo "el resultado es $resultado1 <br>";

echo "el resultado ingnorando minuscuala y mayuscula es $resultado2  <br>";

if(!$resultado1){
	echo "Coinciden";

}else{
	echo "no Coinciden";
  
}
echo "<br>";
define("AUTOR", "juan" , true);
define("AUTOR", "carlos");

echo "el nombre del autor es " . AUTOR;





?>
	
</body>
</html>