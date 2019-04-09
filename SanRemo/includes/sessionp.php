<?php
function Selectp($csys){
    session_start();
    if(!isset($_SESSION['tipo'])){
        header('location: http://localhost/ejemplosyProyecyos/SanRemo/#home');
    }else{
        if($_SESSION['tipo'] != $csys){
            header('location: http://localhost/ejemplosyProyecyos/SanRemo/#home');
        }
    }
}

?>