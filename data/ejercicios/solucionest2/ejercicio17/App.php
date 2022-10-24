<?php

    class App {

        public function __construct($name = "Aplicación PHP")
        {
          $this->name = $name;
          $this->module = "DAW";
          $this->student = "Sergio Respau";
        }

        public function run()
        {
          if (isset($_GET['method'])) {
            $method = $_GET['method'];
          } else {
            $method = "index";
          }
          $this->$method();
        }
        
        public function index(){   
            include('Pagina.php');
        }

        public function fibonacci(){
            $num = 0;
            $n1 = 0;
            $n2 = 1;
            $array = [0,1];
            for($i = 0; $n2 <= 1000000; $i++){
                $n3 = $n1 + $n2;
                $n1 = $n2;
                $n2 = $n3;
                $array[] = $n1;
            }
            $this->mostrarArray($array);
        }

        public function potencias2(){
            $array = [];
            for($i = 1; $i <= 24; $i++){
                $potencia = 2**$i; 
                $array[]= $potencia;
            }
            $this->mostrarArray($array);
        }

        public function factorial(){
            $resultado = 1;
            $array = [];
            for($i = 1; $resultado < 1000000; $i++){
                $array[] = $i;
                $resultado = 1;
                for($x = $i; $x >= 1; $x--){
                    $resultado *= $x;
                }                
            }
            unset($array[count($array)-1]);
            $this->mostrarArray($array);
        }

        //Función para calcular los números primos hasta 10000
        public function primo(){
            $array = [];
            for ($i = 2; $i < 10000; $i++) {                
                //Definimos la variable esPrimo en 1 (verdadero). Si se cambia a 0 no es primo, si se mantiene en 1 es primo
                $esPrimo = 1;
                //Con intval conseguimos el valor int de un calculo. En este caso obviaría los decimales.
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $esPrimo = 0;
                        break; //En cuanto se vea que no es primo salimos del for. No hará falta recorrer el resto de números
                    }
                }                
                //Si esPrimo es 1 significa que es un número primo
                if ($esPrimo == 1)
                    $array[] = $i;
            }
            $this->mostrarArray($array);
        }

        public function mostrarArray($array){
            echo "<hr>";
            echo "<b>La array resultado es: </b>";
            for($i = 0; $i < count($array); $i++){
                if($i == count($array)-1){
                    echo $array[$i];
                }elseif($i == count($array)-2){
                    echo $array[$i] . " y ";
                }else{
                    echo $array[$i] . ", ";
                }
            }
            echo "<hr>";
        }
    }

