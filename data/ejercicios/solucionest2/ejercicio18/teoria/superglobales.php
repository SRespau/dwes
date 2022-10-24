<?php
    $mihost= $_SERVER['HTTP_HOST'];//Solicitamos la información del Host que usa la petición. Lo obtiene de las cabeceras tipo Get/Post
    //En este caso le decimos que solo queremos que nos enseñe la información HTTP_HOST (el host). Es un array y queremos obtener esa clave
    echo "<br>El host al que va la peticion es: " . $mihost;
     
    /*Ejercicio
    Mostrar aqui:
    - El nombre del servidor web
    - El lenguaje
    - El nombre de la página actual que realiza la solicitud
    - El tipo de navegador que realiza la solicitud*/    
    echo "<br>El nombre de servidor es:" . $_SERVER['SERVER_NAME'];
    echo "<br>El lenguaje es: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo "<br>La página que solicita la información es: " . $_SERVER['PHP_SELF'];
    echo "<br>El navegador que utiliza es: " . $_SERVER['HTTP_USER_AGENT'];