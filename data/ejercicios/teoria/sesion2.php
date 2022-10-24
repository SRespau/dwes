<?php
//Se une a la sesion ya comenzada por la página anterior. Buscara una cookie llamada PHPSESSID y se unira a ella
session_start();

echo "La página se ha cagado " . $_SESSION["contador"] . " veces. <br>";

echo "El producto en la lista de compra es: " . $_SESSION['producto'];