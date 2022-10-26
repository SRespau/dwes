<?php //Las sesiones continuaran activas hasta que se cierre el navegador

//Crear sesion o unirse a una sesion ya creada. Tiene que ser lo primero de la pagina, como las cookies. (antes que el html incluso)
$array = ["misesion"];
session_start($array); //session_start es una array asociativa

//$_SESSION['nombre variable']; <- lo mismo que abajo ($_SESSION['contador])

//Crear un contador de visitas
if(!isset($_SESSION['contador'])){ //Se crea automaticamente aqui al definirla
    $_SESSION['contador'] = 0;
}else{
    $_SESSION['contador']++;
}
//Podemos tener muchas variables para la misma sesion. Se guarda en arrays
$_SESSION['producto'] = "cortacesped";

echo "He visitado la página " . $_SESSION['contador'] . " veces.";

echo "<a href='sesion2.php'>Siguiente página</a>";