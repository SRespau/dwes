<!DOCTYPE html>

<?php    
// Comprobará si se ha pulsado el submit. Comprobará si hay valores en el input nombre.
//  Comprobará si la longitud del valor es igual o mayor que 3 caracteres. 
// - Si es igual o mayor a 3 escribirá un mensaje dando un saludo
// - Si es de menor valor imprimirá por pantalla un mensaje de advertencia con el nombre incorrecto 
    if(isset($_GET["envio"])){
        if(!empty($_GET["nombre"])){
            if(strlen($_GET["nombre"]) >= 3){
                echo "<br>Hola <b>" . $_GET["nombre"] . "</b>, que tal estas";
            }else{
                ;
                echo "<br><h4>El nombre '" . $_GET["nombre"] . "' no es válido. Mínimo 3 caracteres.</h4>";
        }        
    }
    
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <p>
        <!-- Formulario para enviar un nombre con destino a la misma página -->
        <!-- Utilizaremos htmlspecialchars para evitar codigo externo. PHP_SELF para enviar a la misma página -->
        <form action="<?php htmlspecialchars("PHP_SELF") ?>" method="get">
            <br>
            <label for="nombre">Inserta nombre (3 digitos mínimo): </label>
            <input type="text" name="nombre" id="nombre" value=<?php echo $error ?>>
            
            <input type="submit" name="envio" id="envio" value="Enviar">
        </form>
    </p>    
</body>
</html>