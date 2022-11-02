<?php
//Se añadirá a la sesión creada con anterioridad
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <title>Index</title>
  <style> 
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      padding: 8px;
      background-color: #dddddd;
    }
  </style>
</head>
<body>
    <?php
      // Cabecera con 3 links, Indice, login y logout -->        
      require('vistas/header.php'); 
    ?>
    <!-- Saludará al usuario leyendo de la cookie el nombre de usuario -->
    <h2>¡Muy buenas de nuevo <?php echo json_decode($_COOKIE["DatosUser"], true)["Usuario"]; ?>! </h2>
    <h3>Mostrando tu lista de deseos:</h3>
    <?php

      // Si la sesion está creada la leerá, decodificará sus valores en json y los añadirá  en una variable array.
      // Mostrará la información de la array en forma de lista ordenada.        
      if(isset($_SESSION["listaDeseo"])){        
        echo "<ol>";        
        $lista = json_decode($_SESSION["listaDeseo"]);        
                
        foreach($lista as $deseo){
          echo "<li>". $deseo . "</li> <br>";//
        }
        echo "</ol>";                 
      }
           
    ?>

  <!-- Formulario que envia a la función new cuando se ha añadido un objeto nuevo y pulsado el botón "Enviar" -->
<form action="?method=new" method="post">
      <label for="nuevo_deseo">Añade un nuevo deseo:</label>
      <input type="text" name="nuevo_deseo" id="nuevo_deseo" required>
             
      <input type="submit" value="Añadir" name="envio">
    </form>

    <!-- Formulario que envia a la función delete  y pulsado el botón "Eliminar" -->
    <!-- El usuario escribirá el número del objeto que quiere borrar -->
    <form action="?method=delete" method="post">
      <label for="borrar_deseo">Borra un deseo de la lista:</label>
      <input type="text" name="borrar_deseo" id="borrar_deseo" placeholder="Escribe número de la lista">
      
      <input type="submit" value="Eliminar" name="borrar">
    </form>
    
    <!-- Formulario que envía a la función empty y borra toda la lista de deseos al pulsar el boton "Borrar cesta"-->
    <form action="?method=empty" method="post">      
      <input type="submit" value="Borrar cesta" name="eliminar">
    </form>
  </body>
</html>