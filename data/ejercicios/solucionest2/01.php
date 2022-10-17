<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    //establecemos variables
        $nombre = "Sergio";
        $apellidos = "Respau Aldana";
        $edad = 32;
        $telefono = 622343599;
        $email = "emailprueba@gmail.com";

    //1.- Imprimir con print y con echo
    print("El alumno es: " . $nombre . " " . $apellidos . "<br>    Edad: " . $edad
    . "<br>    Teléfono: " . $telefono . "<br>    Email: " . $email);
    print("<br>-----------------------------------<br>");

    echo('El alumno es: ' . $nombre . ' ' . $apellidos . '<br>    Edad: ' . $edad
    . '<br>    Teléfono: ' . $telefono . '<br>    Email: ' . $email);
    ?>
</body>
</html>