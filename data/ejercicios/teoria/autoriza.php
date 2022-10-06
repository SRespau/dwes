<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pagina de chequeo de credenciales: </h1>
    <h2>Si has llegado aqui eres un heroe</h2>
    <?php
    /*Metodo de abajo para obtener la info de method="get"
        echo "<br> El nombre de usuario introducido es: " . $_GET['nombreusu'];//Ponemos como clave del array el "name" de la etiqueta de formulario en miformulario, como he llamado al campo
        echo "<br> La password es: " . $_GET['passwd'];*/

    // Metodo de abajo para obtener la info de method="post" unido a if por si el usuario ha metido datos o no. isset nos dice si la variable esta definida y tiene datos
    if (isset($_POST['envio'])) { //Este if sirve para cercionarse que el usuario le ha dado al boton "enviar" y se han mandado los datos
        if (!empty($_POST['nombreusu'])) {
            echo "<br> El nombre de usuario introducido es: " . $_POST['nombreusu'];
        } else {
            echo "<br><h3>No has intoducido ningun usuario</h3>";
        }
    }

    if (isset($_POST['envio'])) { //Este if sirve para cercionarse que el usuario le ha dado al boton "enviar" y se han mandado los datos
        if (!empty($_POST['passwd'])) {
            echo "<br> La password es: " . $_POST['passwd'];
        } else {
            echo "<br><h3>No has intoducido ninguna contraseña  </h3>";
        }
    }

    //Recogida valores checkbox
    if (isset($_POST['envio'])) {
        if (!empty($_POST['asignaturas'])) {
            $asignaturas = $_POST['asignaturas'];
            foreach ($asignaturas as $asignatura) {
                echo "<br> Te encanta el lenguaje de programación:" . $asignatura;
            }
        } else {
            echo "<br> No te gusta la programación";
        }
    }

    //Recogida datos RadioButton
    if (isset($_POST['envio'])) {
        $equipo = $_POST['equipo'];
        if (!empty($_POST['equipo'])) {
            echo "<br><br>Tu equipo de baloncesto preferido es: " . $equipo;
        } else {
            echo "<br><br>No has elegido ningún equipo";
        }
    }

    //Recogida datos desplegables
    if (isset($_POST['envio'])) {
        $menus = $_POST['menus'];
        if (!empty($_POST['menus'])) {
            echo "<br><br>Tu plato preferido es: " . $menus;
        } else {
            echo "<br><br>No has elegido ningún menu";
        }
    }
    //Recogida datos desplegables multiples opciones
    if (isset($_POST['envio'])) {
        $menus = $_POST['menusm'];
        if (!empty($_POST['menusm'])) {
            foreach ($menus as $menu) {
                echo "<br> Tus platos preferidos son: " . $menu;
            }
        } else {
            echo "<br><br>No has elegido ningún menu";
        }
    }

    if (isset($_POST['envio'])) {
        $ip = $_POST['ip'];
        if (!empty($_POST['ip'])) {
            echo "<br> La ip del servidor es: " . $ip;
        } else {
            echo "<br><br>No se ha podido averiguar la ip del servidor";
        }
    }

    ?>
</body>

</html>