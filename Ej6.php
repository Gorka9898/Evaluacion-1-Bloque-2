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

            $personas = array(
                "Enero" => array("Mikel", "Laura"),
                "Febrero" =>array("Naia", "Beñat"),
                "Marzo" => array("Urko", "Sol"),
                "Abril" => array("Jose", "Manuel"),
                "Mayo" => array("Me", "duele"),
                "Junio" => array("Javi", "Javi 2"),
                "Julio" => array("Peter", "Florentino"),
                "Agosto" => array("Iñigo", "Jon"),
                "Septiembre" => array("Sofia", "Zofia"),
                "Octubre" => array("Ventana", "Camisa"),
                "Nobiembre" => array("Comedor", "Urinario"),
                "Diciembre" =>array("Leire", "Unai")
            );
            $meses = array(
               0  => "Enero",
                1=>  "Febrero",
                2 => "Marzo",
                3 => "Abril",
                 4=> "Mayo",
               5 =>  "Junio",
               6 =>  "Julio",
               7 =>  "Agosto",
               8 =>  "Septiembre",
               9 =>  "Octubre",
             10  =>   "Nobiembre",
               11  => "Diciembre"
            );


            echo "<table border= '1px solid black'>";
            for ($i=0; $i < count($meses); $i++) { 

                echo "<tr>";
                echo "  <th style ='color:blue'>" .$meses[$i]."  </th>";

                switch ($meses[$i]) {
                    case 'Enero':
                        
                for ($j=0; $j < count($personas["Enero"]) ; $j++) { 
                
                    echo "  <td>" .$personas["Enero"][$j]."  </td>";
                }
                        break;
                        case 'Febrero':
                            for ($j=0; $j < count($personas["Febrero"]) ; $j++) { 
                
                                echo "  <td>" .$personas["Febrero"][$j]."  </td>";
                            }
                            break;
                            case 'Marzo':
                                for ($j=0; $j < count($personas["Marzo"]) ; $j++) { 
                
                                    echo "  <td>" .$personas["Marzo"][$j]."  </td>";
                                }
                                break;
                                case 'Abril':
                                    
                                     for ($j=0; $j < count($personas["Abril"]) ; $j++) { 
                                        
                                            echo "  <td>" .$personas["Abril"][$j]."  </td>";
                                        }
                                    break;
                                    case 'Mayo':
                                        for ($j=0; $j < count($personas["Mayo"]) ; $j++) { 
                
                                            echo "  <td>" .$personas["Mayo"][$j]."  </td>";
                                        }
                                        break;
                                        case 'Junio':
                                            
                                            for ($j=0; $j < count($personas["Junio"]) ; $j++) { 
                                            
                                                echo "  <td>" .$personas["Junio"][$j]."  </td>";
                                            }
                                            break;
                                            case 'Julio':
                                                
                                                for ($j=0; $j < count($personas["Julio"]) ; $j++) { 
                                                
                                                    echo "  <td>" .$personas["Julio"][$j]."  </td>";
                                                }
                                                break;
                                                case 'Agosto':
                                                    for ($j=0; $j < count($personas["Agosto"]) ; $j++) { 
                
                                                        echo "  <td>" .$personas["Agosto"][$j]."  </td>";
                                                    }
                                                    break;
                                                    case 'Septiembre':
                                                        for ($j=0; $j < count($personas["Septiembre"]) ; $j++) { 
                
                                                            echo "  <td>" .$personas["Septiembre"][$j]."  </td>";
                                                        }
                                                        break;
                                                        case 'Octubre':
                                                            for ($j=0; $j < count($personas["Octubre"]) ; $j++) { 
                
                                                                echo "  <td>" .$personas["Octubre"][$j]."  </td>";
                                                            }
                                                            break;
                                                            case 'Nobiembre':
                                                                for ($j=0; $j < count($personas["Nobiembre"]) ; $j++) { 
                
                                                                    echo "  <td>" .$personas["Nobiembre"][$j]."  </td>";
                                                                }
                                                                break;
                                                                case 'Diciembre':
                                                                    for ($j=0; $j < count($personas["Diciembre"]) ; $j++) { 
                
                                                                        echo "  <td>" .$personas["Diciembre"][$j]."  </td>";
                                                                    }
                                                                    break;
                                                                                                                                                                                                                                                                                            
                
                }











                echo "</tr>";
            }


            

            echo "</table>";



            }


    }
    $Arrai = new Arrai();
    $Arrai->Meses();



?>


</body>

</html>