<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 


    class Factorial {
        private $numero;

        public function __construct($numero) {
            $this->numero = $numero;
            
        }


        public function calcFactorial() {

            $arrai= array(0,1,2,3,4,5,6,7,8,9) ;
            $factorial=0;
            $i= $arrai[$this->numero];
            $factorial= $arrai[$this->numero];;

            if ($this->numero<10 && $this->numero>-1) {

                
                
                for ($u=1; $u < $i; $u++) { 
                    $factorial=$factorial*$u;
                }

                echo "El factorial es: ";
                echo $factorial;
                echo "<br>";

            }else {
                echo "Esta posicion no esta incluido en el arrai";
            }

            }

           

    

    }
    $Factorial = new Factorial(3);
    $Factorial->calcFactorial();


?>


</body>

</html>