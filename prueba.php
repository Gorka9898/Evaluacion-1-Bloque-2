<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<?php 


    class Compra {
        private $precio;
        private $tipo;

        public function __construct($precio, $tipo) {
            $this->precio = $precio;
            $this->tipo = $tipo;
            
        }


        public function coste() {

            $total =0;
            $calcIva=0;

            if ($this->precio<20) {
                if ($this->tipo=="mascota") {
                    echo "no se puede realizar el envio";
                    echo "<br>";
                    $calcIva= 10*$this->precio/100;
                    $total=$this->precio+$calcIva;
                }else {
                    echo "Los costes de envio son de 9€";
                    echo "<br>";
                    $calcIva= 21*$this->precio/100;
                    $total=$this->precio+$calcIva+9;

                    
                }
            }elseif ($this->precio>=20 && $this->precio<80) {
                if ($this->tipo=="mascota") {
                    echo "Los costes de envio son de 9€";
                    echo "<br>";
                    $calcIva= 10*$this->precio/100;
                    $total=$this->precio+$calcIva+9;
                }else {
                    echo "Los costes de envio son de 9€";
                    echo "<br>";
                    $calcIva= 21*$this->precio/100;
                    $total=$this->precio+$calcIva+9;
                }
            }elseif ($this->precio>=80) {

                if ($this->tipo=="mascota") {
                    echo "Los costes de envio son gratis";
                    echo "<br>";
                    $calcIva= 10*$this->precio/100;
                    $total=$this->precio+$calcIva;
                }else {
                    echo "Los costes de envio son gratis";
                    echo "<br>";
                    $calcIva= 21*$this->precio/100;
                    $total=$this->precio+$calcIva;
                }
            }

            echo "el coste total es de: ";
            echo $total;


    }

    }
    $Compra = new Compra(56, "mascota");
    $Compra->coste();


?>


</body>

</html>