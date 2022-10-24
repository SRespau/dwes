<?php //Establecemos cookies porque html es sin estado, con lo que nunca guarda datos del cliente. Necesitamos cookies para guardar dichos datos y acceder a ellos 

    //Definir una cookies (las cookies van en la cabecera)
    //Las cookies siempre antes de mostrar nada por pantalla. Si pones echo "hola" estas creando el cuerpo y las cookies van en la cabecera,
    //por lo que daría problemas

    // time();se llama "epoch time" o "unix time" -> segundos desde 01/01/1970- time()+60 1 minuto ---- time()+(24*60*60) 1 dia
    // strtotime("+1 week 2 days); Devuelve los segundos en una frase en ingles, en este caso 1 semana y dos dias. 
    // time() = strtotime(now) --> es lo mismo
    $miarray = ["hola", 25, [1,3,5]];
    //$miarrayJson = ["a"=>"hola", "b" => 25, "c" => [1,3,5]]; //Utilizamos un array asociativo para que el json funcione mejor. Json coge clave:valor, por lo que con datos simples sin clave los enseñara pero no será lo óptimo
    $infoguardar = serialize($miarray); // Para guardar datos en cookies (solo entiende php serialize). Se le envia unos valores mixtos y te devuelve una cadena. Lo devuelve como a:3:{i:0;s:4:"hola";i:1;i:25;i:2;a:3:{i:0;i:1;i:1;i:3;i:2;i:5;}}

    //Codificación del array en JSON
    $infojson = json_encode($miarray);  //Formato para guardar información en texto plano. Es como XML. Los datos irán como -> {nombreCampo: valor}
    //ejemplo: { "stuff": { "that": [1,3,5], "isin": false, "json": "end"}}

    //Decodificación del array en JSON
    //https://www.w3schools.com/Php/php_json.asp




    setcookie("primeracookies", $infoguardar, strtotime("+1 minute"));
    setcookie("segundacookies", $infojson, time()+ 120); //Guardamos $infoguardar, una cadena creada por una serie de valores mixtos

    
    echo "<h1>Mi primera cookie</h1>";
    
    echo "Valor de la cookie uno: " . $_COOKIE["primeracookies"]; //Es una array asociativa
    echo "<br>Valor de la cookie dos: " . $_COOKIE["segundacookies"];
    //Saldra en el segundo refresco porque la primera vez será para crearla y enviarla al cliente. La segunda vez ya el cliente me la mandará y podré leerla.
    echo "<pre>"; //para añadir texto con un formato por defecto
    var_dump(unserialize($_COOKIE["segundacookies"]));//Lo desserializo para que se vea mejor 
    var_dump($infojson);
    
    echo "<br> Número de cookies creadas " . count($_COOKIE);
    
    //Eliminar cookies
    //  setcookie("primeracookies", "aceptado", time()-120); Para borrar una cookie se establece en el pasado, antes de la hora local. Antes que los echo tambien
    //  unset(); Caduca la cookie, pero no la elimina
?>