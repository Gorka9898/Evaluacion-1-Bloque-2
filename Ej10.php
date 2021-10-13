<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>
<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="apellido"><br>
    DNI: <input type="text" name="dni"><br>
    <input type="submit" value="Enviar"><br><br><br>
</form>




<?php 
    class Persona {
        private $nombre;
        private $apellido;
        private $dni;


        public function __construct($nombre, $apellido, $dni) {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->dni=$dni;

            
        }
        


        public function datos() {     
            
            if (isset($_POST["nombre"])){
                $nombre=$_POST["nombre"];
            }
            if (isset($_POST["apellido"])){
                $apellido=$_POST["apellido"];
            }
            if (isset($_POST["dni"])){
                $dni=$_POST["dni"];
            }
            


            if (isset($_POST["nombre"])&& (isset($_POST["apellido"])) && (isset($_POST["dni"]))) {
                echo "<table>";
                echo "<tr>"."Nombre: " .$nombre." ".$apellido."</tr><br>" ;
                echo "<tr>"."DNI: " .$dni."</tr><br>";
                echo "</table>";
            }



    }

    public function set_nombre($nombre)
    {
        $this->nombre=$nombre;
    }

    public function get_nombre($nombre)
    {
        return $this->$nombre;
    }
    public function set_apellido($apellido)
    {
        $this->apellido=$apellido;
    }

    public function get_apellido($apellido)
    {
        return $this->$apellido;
    }
    public function set_dni($dni)
    {
        $this->dni=$dni;
    }

    public function get_dni($dni)
    {
        return $this->$dni;
    }



    }





?>


</body>

</html>