<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $primo = true;
        define("CONSTANTE", 193);
        echo("Lista números divisores de " . CONSTANTE . " : ");
        
        for($i = 2; $i <= CONSTANTE - 1; $i++){
            if(CONSTANTE % $i == 0){
                echo($i . ", ");
                $primo = false;
            }
        }
        if($primo == true){
            echo(" es número primo");
        }
    ?>
</body>
</html>