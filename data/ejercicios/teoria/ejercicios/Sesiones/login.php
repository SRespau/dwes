<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <form action="" method="post">
        <label for="usuario">
            <input type="text" name="user" id="user">
        </label>
        <label for="pass">
            <input type="password" name="pass" id="pass">
        </label>

        <input type="submit" value="Enviar" name="envio">
    </form>

    <?php
        if(isset($_POST["envio"])){            
            if($_POST["user"] == "usuario" && $_POST["pass"] == 1234){
                
            }elseif($_POST["user"] == "admin" && $_POST["pass"] == 4567){

            }else{
                echo "Datos de acceso erróneos";
            }
        }
    ?>
</body>
</html>