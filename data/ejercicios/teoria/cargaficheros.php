<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Información del fichero</h1>
    <?php

    if(isset($_POST["envio"])){
        if($_FILES['myfile']['tmp_name'] != '') { //Comprueba el tmp_name (nombre en carpeta temporal) si es diferente a nada. Si es igual a nada es que no se ha subido
            
        //$_FILES es un array asociativo. 
        //   1- En la primera parte va el name del input. 
        //   2- En la segunda parte en valor que queremos obtener del metodo $_FILES (mirar documentación php para mas tipos de datos)
        echo "Nombre del fichero: " . $_FILES["myfile"]["name"];
        echo "<br>Extensión del fichero: " . $_FILES["myfile"]["type"];
        echo "<br>Tamaño del fichero: " . $_FILES["myfile"]["size"];
        echo "<br>Nombre del fichero temporal: " . $_FILES["myfile"]["tmp_name"];
        
        /*$existe = '/subidaficheros/'.$_FILES["myfile"]["name"]; 
        if (file_exists($existe)){

        } Para comprobar si existe ya un fichero en la carpeta*/ 
         
        //Añadimos destino + nombre del fichero para que se mueva ahi
        $destino = "ficherosSubidos/".$_FILES["myfile"]["name"];
        //Usamos el comando move_uploaded_file con el nombre del archivo tmp al destino
        $flag = move_uploaded_file($_FILES["myfile"]["tmp_name"],$destino); //Devuelve un boolean 
        echo $flag ? "<br>Fichero Subido correctamente" : "<br>Fallo en la subida";
    
        }else{
            echo "<p>No has enviado ningun fichero</p>";
        }
    }
    ?>
</body>
</html>