<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 
    class Potencia {
        private $potencia;
        private $cantidad;

        public function __construct($base, $exponente) {
            $this->base = $base;
            $this->exponente = $exponente;
            
        }


        public function calcPot() {              

            $result= pow($this->base, $this->exponente );
            echo "<table border= '1px solid black'>";
            echo "<tr>";
            echo "  <th> Base  </th>";
            echo "  <th> Exponente  </th>";
            echo "  <th> Resultado  </th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>" .$this->base. "</td>";
            echo "<td>" .$this->exponente. "</td>";
            echo "<td>" .$result. "</td>";
            echo "</table>";


    }

    }

    $Potencia = new Potencia(3,3);
    $Pot->calcPot();



?>


</body>

</html>