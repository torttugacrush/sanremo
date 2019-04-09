<?php

    session_start();

    if(!isset($_SESSION['tipo'])){
        header('location: index.php');
    }else{
        if($_SESSION['tipo'] != 1){
            header('location: index.php');
        }
    }


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
      <li class="nav-item ">
            <a class="nav-link" href="http://localhost/ejemplosyProyecyos/SanRemo/index.php?cerrar_sesion="><div class="activo activo1"><i class="icono fas fa-home "></i><span  >Salir</span><hr class="d-none d-sm-block activo hr"> </div></a>
          </li>
         
	administrados
  
</body>
</html>