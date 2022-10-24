<?php

   phpinfo();

/*if(isset($_POST["envio"])){
    //Si el idioma está establecido, coches también y la cookie NO existe, que la cree
    if(!empty($_POST["idioma"]) && !empty($_POST["coches"]) && !isset($_COOKIE["infoUsu"])){
    //Si pusieramos un dato unitario (solo idioma o coches), no haria falta codificarlo con json. Simplemente se pondría en la cookie
    $infoUsuario = json_encode([$_POST["idioma"], $_POST["coches"]]);
    setcookie("infoUsu", $infoUsuario, strtotime("+1 day"));

    //Redirige a la pagina de resultados una vez este creada la cookie
    header("location: ejercicio1Resultado.php");
    exit(); //o die(); Lo ponemos por si la instruccion de redirección no surge efecto, por lo que ejecutaremos un salir por si acaso
    }
}else{
    //El else es de seguridad. Cuando la persona no venga desde el formulario y cargue directamente esta pagina desde el navegador
    //Para ello borraremos las cookies como medidad de seguridad y redigiremos al inicio
    setcookie("infoUsu", "", time()-120);
    header("Location: ejercicio1Pagina.html");
}
*/