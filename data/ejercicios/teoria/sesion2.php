<?php
//Se une a la sesion ya comenzada por la página anterior. Buscara una cookie llamada PHPSESSID y se unira a ella
session_start();

//Combinación para borrar y destruir la información de la sesión. Se destruye pero no se borra la cookie establecida
$_SESSION = array();
session_destroy();
//tambien hay que borrar la cookie
setcookie(session_name(),"", time() -120, '/');//session_name para obtener el valor de la sesion. 
//Ponemos '/' para chrome (y ya para todos) porque puede que no borre la cookie si no lo ponemos


echo "La página se ha cagado " . $_SESSION["contador"] . " veces. <br>";

echo "El producto en la lista de compra es: " . $_SESSION['producto'];