<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    //Imprimirá con el uso de un bucle los números divisibles de 3 entre 1 y 10. Usará "modulo" para saber si es divisible o no.
        echo("Los números entre 1 y 10 divisibles para 3 son: ");
        for($div = 1; $div <= 10; $div++){
            if($div % 3 == 0){
                echo($div . ", ");
            }
        }

    ?>
</body>
</html>