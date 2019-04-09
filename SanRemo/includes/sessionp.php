<?php
function Selectp($usys){
    session_start();
    if(!isset($_SESSION['tipo'])){
        header('location: http://localhost/ejemplosyProyecyos/SanRemo');
    }else{
        if($_SESSION['tipo'] != $usys){
            header('location: http://localhost/ejemplosyProyecyos/SanRemo');
        }
    }
}

?>