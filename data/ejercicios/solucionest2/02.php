<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        define("TABLA", 10);
        define("NUMERO", 8);

        echo "<table border=1>";
        echo "<tr>";
        
        for ($row = 1; $row <= TABLA; $row++) {           
            echo "<td>" . ($row * NUMERO) . "</td>";

    }
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>