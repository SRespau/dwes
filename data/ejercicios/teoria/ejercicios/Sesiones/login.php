<?php
    //usuario: 1234  => rol = 0
    //admin: 4567   => rol = 1
    function comprobarCredenciales($nombreusu, $clave){
        if($nombreusu === "usuario" && $clave === "1234"){
            $credenciales["nombreusu"] = "usuario";
            $credenciales["rol"] = 0;
            return $credenciales;
        }
        if($nombreusu === "admin" && $clave === "4567"){
            $credenciales["nombreusu"] = "admin";
            $credenciales["rol"] = 1;
            return $credenciales;
        }
        return false;
    } // funcion

    if($_SERVER["REQUEST_METHOD"] === "POST"){ // Check which request method was used to access the page; e.g. 'GET', 'HEAD', 'POST', 'PUT'. 
        if(isset($_POST["envio"])){
            $credentials = comprobarCredenciales($_POST["user"], $_POST["pass"]);
            if($credentials === false){
                $error = 1;
            }else{
                session_start();
                $_SESSION["loginOk"] = $credentials;
                header("Location: principal.php");
            }
        }
    }
?>

<!--
 
        if(isset($_POST["envio"])){            
            if($_POST["user"] == "usuario" && $_POST["pass"] == 1234){
                $isAdmin = 0;
                session_start();
                $_SESSION["rol"] = $isAdmin;
                header("Location: principal.php");
            }elseif($_POST["user"] == "admin" && $_POST["pass"] == 4567){
                $isAdmin = 1;
                session_start();
                $_SESSION["rol"] = $isAdmin;
                header("Location: principal.php");
            }else{
               //echo "Datos de acceso erróneos";
               echo '<script>alert("Datos de acceso erróneos. Intente de nuevo.")</script>';
            }
        }
    ?> 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>Iniciar sesion</h1>
    <!--Comprovamos la variable error de arriba y mostramos un mensaje de color rojo despues de h1 si es erroneo -->
    <?php
        if(isset($error) && $error == 1){
            echo "<p><font color=\"red\">Credenciales inválidas.</font></p>"; 
        }
    ?>  

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> <!-- Para redirigir a la misma pagina mejor no dejarlo el cambio action vacio, es propenso a ataques-->
        <!-- htmlspecialchars convierte caracteres especiales (como <script>) en una cadena. Asi protegemos contra ataques xss ya que no se ejecutará. 
            Con $_SESRVER["PHP_SELF"] redirigimos a la misma pagina, en este caso coge el nombre de la página actual. -->
        <label for="usuario">Usuario: </label>
        <input type="text" name="user" id="user">
        <br>
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass" id="pass">        

        <input type="submit" value="Enviar" name="envio">
    </form>
    
</body>
</html>