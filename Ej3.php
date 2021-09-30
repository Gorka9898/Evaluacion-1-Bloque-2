<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 


    class Numeros {
        private $lineas;
        private $columnas;

        public function __construct() {

            
        }
        


        public function calcNumeros() {

            $suma=0;
            $media=0;
            $mayor=0;
            $menor=200;

            $arrai= array();

            for ($i=0; $i < 20; $i++) { 
                
                $arrai[$i]=rand(0, 200);

                echo $arrai[$i];
                echo "<br>";

            }

            for ($i=0; $i < count($arrai) ; $i++) { 

                if ($arrai[$i]>$mayor) {
                    $mayor= $arrai[$i];
                }
                

            }

            echo "El numero mayor es: ";
            echo $mayor;
            echo "<br>";

            for ($i=0; $i < count($arrai) ; $i++) { 

                
                if ($arrai[$i]<$menor) {
                    $menor= $arrai[$i];
                }

            }


            echo "El numero menor es: ";
            echo $menor;
            echo "<br>";


            for ($i=0; $i < count($arrai) ; $i++) { 

                $suma = $suma+$arrai[$i];

                

            }

            echo "La suma total es: ";
            echo $suma;
            echo "<br>";

            $media=$suma/count($arrai);
            
            echo "La media de los numeros es: ";
            echo $media;
            echo "<br>";


            }

           

    

    }
    $Numeros = new Numeros(3);
    $Numeros->calcNumeros();


?>


</body>

</html>