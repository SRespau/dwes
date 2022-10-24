<?php
//Lo normal es crear una variable con el fichero a abrir. Si esta en otro lugar se pone la ruta absoluta
$nombrefich = "modulodwes.txt";

//Apertura de fichero. $fp se llamara apuntador
$fp = fopen($nombrefich, "r"); 

if(!$fp){
    echo "<br> No he podido leer el fichero";
}else{
    //Leer el fichero
        //1 - caracter a caracter: fucion fgetc
        /*while(!feof($fp)){//Hasta que no llegue al final del fichero "feof"
            $caracter = fgetc($fp);//fgetc lee caracter a caracter. No coje salto de linea
            if($caracter == "\n"){//Si encuentra el caracter de "salto de linea" que añada un <br> en html
                echo "<br>";
            }
            echo $caracter;
        }*/

        //2 - Leyendo linea a linea
        /*while(!feof($fp)){
            $linea = fgets($fp);//fgets lee linea a linea
            echo $linea . "<br>";
        }*/

        //3 - fread  Leera el fichero hasta que llegue al final o a la longitud dada
        //Como hay que añadirle una longitud y queremos leer todo el fichero le añadimos el tamaño del fichero como maximo, con lo que es todo
        //Devuelve un array asociativo. No se puede añadir salto de linea
        $contenido = fread($fp, filesize($nombrefich));
        var_dump($contenido); //Nos da mas información de lo leido
        //print_r($contenido);
        //echo $contenido;    

}
echo "<br>Cerrando el fichero";
fclose($fp);//Importante cerrar el fichero siempre al acabar

//Cerramos y volvemos a abrir para escribir porque lo teniamos en lectura $fp. Se puede hacer otra variable y no hace falta cerrar
$fp = fopen($nombrefich, "a");

if(!$fp){
    echo "<br> No he podido abrir el fichero.";
}else{
    //sudo chmod 666 modulodwes.txt añadir permisos para que el servidor pueda modificar
    fwrite($fp, "<br>Esta es otra linea."); //(fichero, texto a insertar) Se puede poner una variable en el insertado. PHP_EOL constante que añade un \n
    fclose($fp);
}
 
?>