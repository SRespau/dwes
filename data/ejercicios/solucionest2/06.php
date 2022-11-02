<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
<?php   
        //Construimos 2 arrays con jugadores de dos equipos.
        $lakers = ["LeBron James", "Anthony Davis", "Russell Westbrook", "Kendrick Nunn" , "Damien Jones"];
        $bulls = array("Lonzo Ball", "Zach LaVine", "Patrick Williams", "Derrick Jones Jr", "Nikola Vucevic");
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