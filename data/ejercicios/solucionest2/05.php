<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    //Establecemos booleano para decir si es primo o no.
    //Establecemos constante para consultar el número
        $primo = true;
        define("CONSTANTE", 193);
        echo("Lista números divisores de " . CONSTANTE . " : ");
        //Bucle for que comprobará cada número hasta la constante.
        for($i = 2; $i <= CONSTANTE - 1; $i++){
            //Comprueba si la constante es divisible entre el número. Si es divisible el booleano de primo se pondrá en falso
            if(CONSTANTE % $i == 0){
                echo($i . ", ");
                $primo = false;
            }
        }
        if($primo == true){
            echo(" es número primo");
        }
    ?>
</body>
</html>