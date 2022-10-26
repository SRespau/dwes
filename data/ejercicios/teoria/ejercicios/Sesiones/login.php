<?php
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h4>Acceso a nuestra página de sesiones</h4>
    <form action="" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="user" id="user">
        
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass" id="pass">        

        <input type="submit" value="Enviar" name="envio">
    </form>
    
</body>
</html>