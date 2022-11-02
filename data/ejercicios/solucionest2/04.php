<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    //Establecemos los primeros números que son constantes
        $num = 0;
        $n1 = 0;
        $n2 = 1;
        //En el bucle imprimiremos los 7 siguientes números hasta 10 de fibonacci. 
        //Se realizarán cambios de valores con variables auxiliares
        echo("Lista 10 primeros numeros de fibonacci: " . $n1 . ", " . $n2);
        for($i = 0; $i <= 7; $i++){
            $n3 = $n1 + $n2;
            echo ", " . $n3;
            $n1 = $n2;
            $n2 = $n3;
        }
    ?>
</body>
</html>