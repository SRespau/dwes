<?php

session_start();
$_SESSION = array(); //Borramos datos sesion
session_destroy(); //Destruimos sesion
setcookie(session_name(),"", time() -120, '/'); //Borramos la cookie creada de la sesion
header("Location: login.php");