<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores</title>
    <style>
        div{
            width: 200px;
            height:100px;
            text-align: center;
            margin: auto;            
        }
        a{
            color: white;
            line-height: 100px;            
        }
    </style>
</head>
<body>
    <!-- Diferentes links que mandan el color elegido al metodo cambio de app.php-->
    <div style="background-color:red">
        <a href="?method=cambio&color=red">Rojo</a>
    </div>
    <div style="background-color:blue">
        <a href="?method=cambio&color=blue">Azul</a>
    </div>
    <div style="background-color:green">
        <a href="?method=cambio&color=green">Verde</a>
    </div>
    <div style="background-color:orange">
        <a href="?method=cambio&color=orange">Naranja</a>
    </div>
</body>
</html>