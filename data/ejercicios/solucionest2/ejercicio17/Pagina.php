<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <h1>--Bienvenido a mi primera aplicación--</h1>
    <h4>Elija la opción que desearía realizar:</h4>
    <ul>
        <!-- Links formados por los métodos que aparecerán por cabecerá para que los detecte y redirija a las funciones de App.php -->
        <!-- Necesita un include de esta página en App.php para su correcto funcionamiento -->
        <li><a href="?method=fibonacci">Mostrar la cadena fibonacci del número 1.000.000</a></li>
        <li><a href="?method=potencias2">Mostrarlos valores de 2 hasta elevarlo 24 veces</a></li>
        <li><a href="?method=factorial">Mostrar los números factoriales hasta que el más cercano al millón</a></li>
        <li><a href="?method=primo">Mostrar los números primos entre 1 y 10.000</a></li>
    </ul>
</body>
</html>