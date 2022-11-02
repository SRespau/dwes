<?php
// Clase app de nuestra aplicación donde se añadirán todas las funciones.
    class App {
        // Constructor de nuestra clase donde se creará un objeto que incluirá los siguientes datos:
        // name -> nombre aplicación,  module -> modulo clase   student -> nombre del estudiante
        public function __construct($name = "Aplicación PHP")
        {
          $this->name = $name;
          $this->module = "DAW";
          $this->student = "Sergio Respau";
        }
        // Función que obtendrá de la cabecera, con Get, el dato de la función a utilizar y lanzará la función llamada de esta misma clase
        // Por defecto, si no se le indica ninguna función, utilizará la función index()
        public function run()
        {
          if (isset($_GET['method'])) {
            $method = $_GET['method'];
          } else {
            $method = "index";
          }
          $this->$method();
        }
        // Función indice: incluirá el código de pagina.php para poder leer las redirecciones a las funciones.
        public function index(){   
            include('Pagina.php');
        }
        // Función para calcular y almacenar un array con los números fibonacci anteriores a 1.000.000
        // Mandará la array creada a la función mostrarArray.
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

        // Función para calcular las potencias del número 2 elevado 24 veces. Lo guardará en una variable array.
        // Mandará la array creada a la función mostrarArray.
        public function potencias2(){
            $array = [];
            for($i = 1; $i <= 24; $i++){
                $potencia = 2**$i; 
                $array[]= $potencia;
            }
            $this->mostrarArray($array);
        }

        // Función para calculal los numeros factoriales desde 1 hasta n, de tal manera que el último término sea el más próximo cercano al millón.
        // Eliminará de la array el último número ya que será superior al millon y mandará la array creada a la función mostrarArray.
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
        // Añarirá los números calculados a una variable array y la mandará a la función mostrarArray
        public function primo(){
            $array = [];
            for ($i = 2; $i < 10000; $i++) {                
                //Definimos la variable esPrimo en 1 (verdadero). Si se cambia a 0 no es primo, si se mantiene en 1 es primo
                $esPrimo = 1;
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $esPrimo = 0;
                        //En cuanto se vea que no es primo salimos del for. No hará falta recorrer el resto de números
                        break; 
                    }
                }                
                if ($esPrimo == 1)
                    $array[] = $i;
            }
            $this->mostrarArray($array);
        }

        // Función para mostrar por pantalla las arrays enviadas.
        // Está hecha para que el penúltimo número se le añada la conjunción "y" en vez de una "," y que el último dato obvie la "," de su derecha
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

