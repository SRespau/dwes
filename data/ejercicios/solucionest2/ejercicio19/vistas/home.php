<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <title>Index Ejercicio 19</title>
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
        require('vistas/header.php');
    ?>
    <h2>¡Muy buenas de nuevo <?php echo json_decode($_COOKIE["DatosUser"], true)["Usuario"]; ?>! </h2>
    <h3>Mostrando tu lista de deseos:</h3>
    <?php
        echo "<ul>";
        
        $lista = json_decode($_COOKIE["listaDeseo"],true);
        
        foreach($lista as $deseo){
          echo "<li>" . $deseo . "</li>";
        }         
        
        echo "</ul>";
        
    ?>

    <form action="?method=new" method="post">
        <label for="nuevo_deseo">Añade un nuevo deseo</label>
        <input type="text" name="nuevo_deseo" id="nuevo_deseo">

        <input type="submit" value="Enviar" name="envio">
    </form>
  </body>
</html>