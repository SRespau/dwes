<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <style></style>
  <title>Login</title>
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
    // Carga la cabecera de nuestra pagina donde aparecerá Inicio, Login y Logout
    require('vistas/header.php');
  ?>
  <h1>Login de usuario registrado</h1>
  <!-- Formulario para obtener los datos de usuario y contraseña por metodo post -->
  <!-- Mandará a la función autenticar de app.php -->

  <form action="?method=auth" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"> 
    <br>
    <label for="pass">Contraseña</label>
    <input type="password" name="pass"> 
    <br>
    <input type="submit" value="Enviar" name="envio">
  </form>
</body>
</html>