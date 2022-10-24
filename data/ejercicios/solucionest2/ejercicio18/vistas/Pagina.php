<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <title>Index Ejercicio 18</title>
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
  <h1>Home de <?= $this->name ?></h1>
  <h5>¡Muy buenas! Nos encontramos en el índice de nuestra página</h5>
 
  </body>
</html>