<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    //Definimos dos constantes que identificarán la tabla y el número a multiplicar
        define("TABLA", 10);
        define("NUMERO", 8);
    //Creamos una tabla donde aparecerán las cuentas
        echo "<table border=1>";
        echo "<tr>";
    //Bucle para multiplicar por cada linea el número de la constante definida.     
        for ($row = 1; $row <= TABLA; $row++) {           
            echo "<td>" . ($row * NUMERO) . "</td>";

    }
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>