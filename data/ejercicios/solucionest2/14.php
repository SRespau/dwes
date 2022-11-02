<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <p><h1>CALCULADORA PHP</h1>
    <!-- Formulario para enviar los datos de los números elegidos y la opción de operación a realizar -->
    <!-- Se establecieron los input de numero como requerido para que inserte datos obligatoriamente -->
        <form action="<?php htmlspecialchars("PHP_SELF") ?>" method="get">
            <br>
            <label for="operando1">Primer numero: </label>
            <input type="number" name="operando1" id="operando1" required>
            
            <select name="operador" id="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <label for="operando2">Segundo numero: </label>
            <input type="number" name="operando2" id="operando2" required>

            <input type="submit" name="envio" id="envio" value="Enviar">
        </form>
    </p>

    
    <?php
    // Codigo php donde obtendrá los datos enviados por el formulario en get y elegirá la opción correcta para realizar la operacion
    // Obtendra los dos números y el operando. 
        if(isset($_GET["envio"])){
            // Obligaremos la transformación de los datos obtenidos en integer. De este modo detectará los 0 como int y no como boolean
            $num1 = (int)$_GET["operando1"];
            $num2 = (int)$_GET["operando2"];                  
            $signo = $_GET["operador"];
            // Cadena de condicionales para realizar la operación. Se podría haber realizado con un switch también
            if($signo == "+"){
                echo "<h4>El resultado de la suma es: " . ($num1 + $num2) . "</h4>";
            }else if($signo == "-"){
                echo "<h4>El resultado de la resta es: " . ($num1 - $num2) . "</h4>";
            }else if($signo == "*"){
                echo "<h4>El resultado de la multiplicación es: " . ($num1 * $num2) . "</h4>";
            }else{
                if($num2 == 0){
                    echo "<h4>No puede dividirse para 0</h4>";
                }else{
                    echo "<h4>El resultado de la división es: " . ($num1 / $num2) . "</h4>";
                }                        
            }               
                      
        }

    ?>
    
</body>
</html>