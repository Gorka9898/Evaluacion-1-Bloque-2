<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>
<!DOCTYPE html>
<html>
<body>

<?php 


    class Arrai {


        private $palabras;
        private $array_asoc_palabras;

        public function __construct($palabras) {
            $this->palabras = $palabras;
            $this->transformarEnArrayAsoc();
        }

        private function transformarEnArrayAsoc() {
            for ($i = 0; $i < count($this->palabras); $i++) {
                $this->array_asoc_palabras[$this->palabras[$i]] = strlen($this->palabras[$i]); 
            }
        }

           

    

    }
    $Arrai = new Arrai();
    $Arrai->transformarEnArrayAsoc();


?>


</body>

</html>
