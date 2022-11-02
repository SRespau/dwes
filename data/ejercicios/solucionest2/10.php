<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
// Construimos los arrays con datos asociativos. Para cada jugador cambiamos el nombre de la clave por defecto por su posición
        $lakers = array(
            "alero" => "LeBron James", 
            "alapivot" => "Anthony Davis", 
            "base" => "Russell Westbrook",
            "armador" => "Patrick Beverley",
            "centro" => "Damian Jones");

        $bulls = array(
            "armador" => "Lonzo Ball", 
            "escolta" => "Zach LaVine", 
            "alapivot" => "Patrick Williams", 
            "alero" => "Derrick Jones Jr", 
            "centro" => "Nikola Vucevic");

        echo "<h3>Quinteto inicial Lakers</h3>";
        echo "<ul>";
        //Mostramos ambas arrays asociativas con un for each.
        foreach ($lakers as $posicion=>$jugador){
            echo "<li>" . $posicion . " -> " . $jugador . '</li>';
        }
             
        echo "</ul>";
        echo "---------------------------------<br>";
       
        echo "<h3>Quinteto inicial Bulls</h3>";
        echo "<ul>";
        foreach ($bulls as $posicion=>$jugador){
            echo "<li>" . $posicion . " -> " . $jugador . '</li>';
        }
        echo "</ul>";
        
    ?>
</body>
</html>