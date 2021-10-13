<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 
    class Existe {


        public function __construct() {

            
        }


        public function existe() {  
           
            
            if (file_exists("Ej4.php")==true) {
                
                echo "El archivo existe";
            }else {
                throw new Exception("Error el archivo no existe");
                
            }



    }

    }

    $Existe = new Existe();
    $Existe->existe();



?>


</body>

</html>