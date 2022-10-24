<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h2>Lista dinámica con formulario</h2>
    <form action="" nombre="formulario" id="formulario" method="get">
        
        <input type="text" name="nombres[]">
        <input type="submit" name="envio" value="Enviar">
  
        <hr>
        <?php
        echo "<ul>";
            if (isset($_GET['envio'])) {
                
                //Tuve que ir probando mirando el ejemplo y comprender por que guardaba datos como en una array en el input para que lo mostrase la lista
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