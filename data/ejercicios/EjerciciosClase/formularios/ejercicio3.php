<!DOCTYPE html>

<?php
    $error = null;

    if(isset($_GET["envio"])){
        if(!empty($_GET["nombre"])){
            if(strlen($_GET["nombre"]) >= 3){
                echo "<br>Hola " . $_GET["nombre"] . ", que tal estas";
            }else{
                $error = $_GET["nombre"];
                echo "<br>El valor no es válido. Mínimo 3 caracteres.";
        }        
    }
    
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <p>
        <form action="ejercicio3.php" method="get">
            <br>
            <label for="nombre">Inserta nombre (3 digitos mínimo): </label>
            <input type="text" name="nombre" id="nombre" value=<?php echo $error ?>>
            
            <input type="submit" name="envio" id="envio" value="Enviar">
        </form>
    </p>    
</body>
</html>