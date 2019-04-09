<?php
    class Coche {
        var $ruedas;
        var $color;
        var $motor;

        function Coche(){ 
            $this->ruedas=4;
            $this->color;
            $this->motor=1600;
        }

        function arrancar(){

            echo "estoy arrancando <br>";

            
        }
        function girar(){

            echo "Eestoy girando <br>";

        }
        function frenar(){

            echo"estoy frenando <br>";

        }
        function establece_color($colorCoche,$nombreCoche){
            $this->color=$colorCoche;

            echo "El color de " .  $nombreCoche . " es: " . $this->color . "<br>";
        }
    }

    class Camion extends Coche{



        function Camion(){ 
            $this->ruedas;
            $this->color="gris";
            $this->motor=2600;
        }
        function establece_color($colorCamion,$nombreCamion){
            $this->color=$colorCamion;

            echo "El color de" .  $nombreCamion . "es: " . $this->color . "<br>";
        }


    }    
     /*   function establece_color($colorCamion,$nombreCamion){
            $this->color=$colorCamion;

            echo "El color de" .  $nombreCamion . "es: " . $this->color . "<br>";
        }*/
  
  /* $renault = new Coche();
   
   $mazda = new Coche();

   $seat=new Coche();

   $renault->establece_color("rojo" , "Renault");

   $seat->establece_color("azul","Seat");

   //$mazda->girar();

   //echo $mazda->ruedas;
*/
    ?>