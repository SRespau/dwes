<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"])){
            session_start();
            $item = $_POST["lista"];
            $_SESSION["listadeseo"][] = $item; //Creamos array bidimensional en la variable de sesión (SESSION es una array de serie)
            
            echo "<br>Elemento select: " . $_SESSION["listadeseo"];
            $sesioncodif = json_encode($_SESSION); 
            var_dump($sesioncodif);
            
            echo "<br><br> Leyendo SESSION <br>";
            var_dump($_SESSION["listadeseo"]);
            echo "<br>----<br>";

            //OPCION 1: decodifcación como un array
            echo "Lista como array:<br>";
            $sesiondecodif = json_decode($sesioncodif, true);
            var_dump($sesiondecodif);

            //Cambiamos un valor
            //$_SESSION["listadeseo"][2] = "PS5";
            
            echo "<br><br>";

            // OPCION 2: decodificarlos como objeto
            echo "Lectura como objeto: <br>";
            $sesiondecodif2 = json_decode($sesioncodif);
            var_dump($sesiondecodif2);
            //Cambiar el elemento 2 a pizarra.
            //$sesiondecodif->{"listadeseo"}[0] = "Pizarra"; //Objeto->metodo/atributo objeto... $this.metodo


            //Opcion 2.2
            /*$miarray = get_object_vars($sesiondecodif); get_objects_var devuelve las variables de un objeto como array
            print_r($miarray);
            for($i=0; $i < count($array, COUNT_RECURSIVE); $i++) -1{   COUNT_RECURSIVE cuando hay arrays dentro de arrays
                echo "<br>Elemento $i es :" . $miarray["listadeseo"][$i];
            }*/
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de deseos</h1>
    <h3>Hoy me apetece comprar..</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <select name="lista" id="lista" required>
            <option value="camisa">Camisa</option>
            <option value="cortacesped">Cortacesped</option>
            <option value="consola">PS5</option>
            <option value="pantalon">Levis</option>
            <option value="movil">Samsung S22</option>
            <option value="colonia">Hugo Boss</option>
            <option value="coche">Mercedes</option>
            <option value="portatil">Acer</option>
        </select>
        <br><br>
        <input type="submit" name="envio" value="Enviar">
    </form>
</body>
</html>