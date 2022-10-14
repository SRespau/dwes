<?php

if(isset($_GET["envio"])){
    
    if(isset($_GET["operando1"], $_GET["operando2"], $_GET["operador"])){
        
        $num1 = (int)$_GET["operando1"];
        $num2 = (int)$_GET["operando2"];
        $signo = $_GET["operador"];
        
        if(!empty($_GET["operando1"] && !empty($_GET["operando2"]) && !empty($_GET["operador"]))){
            if($signo == "+"){
                echo "El resultado de la suma es: " . ($num1 + $num2);
            }else if($signo == "-"){
                echo "El resultado de la resta es: " . ($num1 - $num2);
            }else if($signo == "*"){
                echo "El resultado de la multiplicación es: " . ($num1 * $num2);
            }else{
                echo "El resultado de la división es: " . ($num1 / $num2);
            }
        }else{
            header("Location: ejercicio4.html");
            echo "<br>Falta un campo por rellenar.";
            }
    }          
}

?>