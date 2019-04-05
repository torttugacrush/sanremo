<?php
  function Pood(){

  	echo "poo en php instancias en php <br>";
  }

 function contador(){
 	static $contador=0;

 	$contador++;

 	echo $contador . "<br>";
 }
?>