<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>
<!DOCTYPE html>
<html>
<body>

<?php 



    class Arrai {


        public function __construct() {

            
        }
        

        public function Meses() {

            $dias = array(
                "Enero" => 31,
                "Febrero" => 28,
                "Marzo" => 31,
                "Abril" => 30,
                "Mayo" => 31,
                "Junio" => 30,
                "Julio" => 31,
                "Agosto" => 31,
                "Septiembre" => 30,
                "Octubre" => 31,
                "Nobiembre" => 30,
                "Diciembre" => 31
            );
            $meses = array(
               0  => "Enero",
                1=>  "Febrero",
                2 => "Marzo",
                3 => "Abril",
                 4=> "Mayo",
               5 =>  "Junio",
               6 =>  "julio",
               7 =>  "Agosto",
               8 =>  "Septiembre",
               9 =>  "Octubre",
             10  =>   "Nobiembre",
               11  => "Diciembre"
            );

           // echo "<table border= '1px solid black'>";
           //  echo "<tr>";
           //  echo "  <th> Indice  </th>";
           //  echo " <td>". "Enero" ."".  "Febrero" ."Marzo" ."Abril" ."Mayo" ."Junio" ."Julio" ."Agosto" ."Septiembre" ."Octubre" ."Noviembre" ."Diciembre" . "</td>  ";
           //  echo "</tr>";
           //  echo "  <th> Valor  </th>";
           //  echo "<td> "  .$meses["Enero"] .$meses["Febrero"] .$meses["Marzo"] . "</td>";
           //  echo "</tr>";
            // echo "</table>";


            echo "<table border= '1px solid black'>";
            echo "<tr>";
            echo "  <th> Indice  </th>";

            for ($i=0; $i < count($meses); $i++) { 
                echo " <td>".$meses[$i]. "</td>  ";
            }
            
            echo "</tr>";
            echo "  <th> Valor  </th>";
            echo "<td>".$dias["Enero"]."</td>"."<td>".$dias["Febrero"]."</td>"."<td>".$dias["Marzo"]."</td>"."<td>".$dias["Abril"]."</td>"."<td>".$dias["Mayo"]."</td>"."<td>".$dias["Junio"]."</td>"."<td>".$dias["Julio"]."</td>"."<td>".$dias["Agosto"]."</td>"."<td>".$dias["Septiembre"]."</td>"."<td>".$dias["Octubre"]."</td>"."<td>".$dias["Nobiembre"]."</td>"."<td>".$dias["Diciembre"]. "</td>";
            echo "</tr>";
            echo "</table>";



            }


    }
    $Arrai = new Arrai();
    $Arrai->Meses();


?>


</body>

</html>