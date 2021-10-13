<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 
    class Potencia {
        private $uno;
        private $dos;
        private $tres;
        private $cuatro;
        private $cinco;

        public function __construct() {

            
        }

        public function calcPot() {     
            
            $n=1;
            $lados= array(5,2,-3,6,5);         

            echo "<table border= '1px solid black'>";
            for ($i=0; $i <count($lados) ; $i++) { 
              
                    $area= pow($lados[$i], 2 );

                    echo "<tr>";
                    echo "  <th> Cubos </th>";
                    echo "  <th> Lado  </th>";
                    echo "  <th> Area  </th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" ."numero ".$n. "</td>";
                    $n++;
                    try {

                       if ($lados[$i]<0) {
                        throw new Exception("Error Numero negativo", 1);
                           
                           
                       }else {
                        echo "<td>" .$lados[$i]. "</td>";
                        
                       }
                         
                    } catch (\Exception $e) {
                        
                        
                        
                    }
                    
                    echo "<td>" .$area. "</td>";
                

            }

            echo "</table>";


    }

    }

    $Potencia = new Potencia(3,2,3,4,3);
    $Potencia->calcPot();



?>


</body>

</html>