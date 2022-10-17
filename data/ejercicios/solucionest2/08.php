<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
<?php
        $lakers[] = "LeBron James";
        $lakers[] = "Anthony Davis";
        $lakers[] = "Russell Westbrook";
        $lakers[] = "Kendrick Nunn";
        $lakers[] = "Damien Jones";       
        
        $bulls[] = "Lonzo Ball";
        $bulls[] = "Zach LaVine";
        $bulls[] = "Patrick Williams";
        $bulls[] = "Derrick Jones Jr";
        $bulls[] = "Nikola Vucevic";
        
        echo "<h3>Quinteto inicial Lakers</h3>";
        echo "<ul>";
        
        //a) Mostrando solo los nombres
        for($i = 0; $i <= count($lakers) - 1; $i++){
            echo "<li>" . $lakers[$i] . "</li>";
        }
        echo "</ul>";
        echo "---------------------------------<br>";
       
        echo "<h3>Quinteto inicial Bulls</h3>";
        echo "<ul>";
        //b) Indicando la posición del nombre en el array
        for($i = 0; $i <= count($bulls) - 1; $i++){
            echo "<li> (" . $i . ")" . $bulls[$i] . "</li>";
        }
        echo "</ul>";
        
    ?>
</body>
</html>