<?php
    $dept = new DOMDocument(); //Creamos un DOM nuevo para el xml
    $dept->load("empleados.xml"); //cargamos el xml en el nuevo DOM
    $respuesta = $dept->schemaValidate("departamento.xsd"); //Validamos el xml con el xsd. Devuelve un boolean

    echo ($respuesta) ? "Documento valido" : "Documento INVALIDO"; //Si es inválido porque falta algo aparecerá el else y además un Warning con el error en cuestión
?>