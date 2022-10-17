<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <p><h1>CALCULADORA PHP</h1>
        <form action="" method="get">
            <br>
            <label for="operando1">Primer numero: </label>
            <input type="number" name="operando1" id="operando1">
            
            <select name="operador" id="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <label for="operando2">Segundo numero: </label>
            <input type="number" name="operando2" id="operando2">

            <input type="submit" name="envio" id="envio" value="Enviar">
        </form>
    </p>

    <?php

        if(isset($_GET["envio"])){
    
            if(isset($_GET["operando1"], $_GET["operando2"], $_GET["operador"])){
        
                $num1 = (int)$_GET["operando1"];
                $num2 = (int)$_GET["operando2"];
                $signo = $_GET["operador"];
                

                if(!empty($num1) && !empty($num2) && !empty($signo)){
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
                }else{
                    echo "<br><h4>Falta un campo por rellenar.</h4>";
                }
            }          
        }

    ?>
    
</body>
</html>