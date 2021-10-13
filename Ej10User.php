<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>


<?php 
    include "Ej10.php";
    Class User extends Persona{

        

        private $puntos;
        public function __construct($puntos,$nombre, $apellido, $dni) {
            parent::__construct($dni,$nombre,$apellido);
            $this->puntos=$puntos;

            
        }
        
        function getPuntos(){

            if (isset($_POST["puntos"])) {
                $this->puntos=$_POST["puntos"];
            }

        }
        function setPuntos(){

            echo  $this->puntos;
            if ( $this->puntos<100) {
                echo " puntos, cuidado, son menos de 100";
            }else{
                echo " puntos";

            }
            
        }



        public function set_puntos($puntos)
        {
            $this->puntos=$puntos;
        }
    
        public function get_puntos($puntos)
        {
            return $this->$puntos;
        }


    }
    
$Persona = new Persona(1,1,1);
$Persona->datos();


?>
<form method="post">
    Puntos: <input type="text" name="puntos"><br>
    <input type="submit" value="Enviar"><br><br>
</form>

Tienes: 



<?php 

    
    $User = new User(2,2,2,2);
    $User->getPuntos();
    $User->setPuntos();




?>
 