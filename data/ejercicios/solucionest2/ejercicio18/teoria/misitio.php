<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--queremos poner nuestra pagina footer.php en nuestra página -->
    <footer>

        <?php
           include "footer.php"; //comando para importar codigo. Podemos ponerlo cuantas veces queramos
           //Se obtienen las variables del codigo que importamos. 
           //Si lo ponemos antes no cargara. Se ha de poner despues de cargar el codigo
           echo "<br> El nombre del admin es: " . $nombreAdmin;
           include_once "footer.php"; 
           //Se pone al final. En casos en los que se ha cargado varias veces anteriormente esta ultima no se cargara. Si se pone varias veces solo carga 1
           //require "footer.php"; //igual que include, pero si falla dara un error.
        ?>

    </footer>
</body>
</html>