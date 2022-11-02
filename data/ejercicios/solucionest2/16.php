<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h2>Lista dinámica con formulario</h2>
    <!-- Formulario en el que enviaremos un dato y el input tendrá capacidad de almacenar un array de datos -->
    <form action="" nombre="formulario" id="formulario" method="get">
        
        <input type="text" name="nombres[]">
        <input type="submit" name="envio" value="Enviar">
  
        <hr>
        <?php
        echo "<ul>";
            if (isset($_GET['envio'])) {
                
                //Tuve que ir probando mirando el ejemplo y comprender por que guardaba datos como en una array en el input para que lo mostrase la lista
                // Foreach que obtendrá los datos añadidos en el input nombres[], los añadirá a otro input con el mismo nombre en hidden
                // para que almacene los datos que hemos ido enviando y también pueda leerlos el input superior.
                // Se mostrará los datos del array dentro de una lista  
                foreach($_GET['nombres'] as $nombre) { 
                echo '<input type="text" name="nombres[]" value="' . $nombre . '" hidden>';                
                echo "<li>" . $nombre . "</li>";
                }
            }
        echo "</ul>";    
        ?>
    </form>
</body>
</html>