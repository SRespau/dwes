<?php

$var1 = 5; 
$var2 = "7";
$var3 = (string)8; /* Cast: transformamos el int 8 en string */
$var4 ="";
$var5;
const MICONST = 100; //variable constante

/*Usamos "$" para comenzar una variable.
Han de ser alfanuméricos: [A-Z,a-z,0-9]. 
No pueden comenzar con números. Tampoco empezar ni contener caracteres especiales (@, #, ?, -). 

-Podemos usar "_". Si usamos "$_" con variables predefinidas. No se recomienda comenzar con _
Concatenamos utilizando "."

-La nomenclatura en variables es casesensitive a medias (distinguir mayus y minus). Para variables si lo es pero para metodos no
$MIVAR  diferente $mivar. METODO1 = metodo1

-Saber si la variable esta definida: isset()
Aunque una variable esté vacía, si esta definida dará un "1" de verdadero.
El echo, si es falso, saldrá una respuesta vacia.
*/
echo " La variable 3 esta definida?: . isset($var3)" . "<br>"; //para salto de linea hay que poner html <br>. Como php para mostrarlo lo pasa
                                                                //a html "/n" no lo cogería.

//-Metodo empty(). Saber si algo está vacío
echo " La variable 3 esta vacia?: . empty($var3)" . "<br>"; //falso
echo " La variable 3 esta vacia?: . empty($var4)" . "<br>"; //verdadero
echo " La variable 3 esta vacia?: . empty($var5)" . "<br>"; //verdadero
/*
-Variables constantes:
=================
Se pondrán con el comienzo "const" y la variable mayuscula. No se escribe "$"
Otra forma es: define("OTRACONST", 200);

-OPERADORES
=============
=, <, > ... !=, <>, ==, ===, <=>
*/
$num1 = 3;
$num2 = 7; 

if($num1 == $num2){
    echo "<br> Son iguales";
}else{
    echo "<br> Son diferentes";
}
//son diferentes
//si num1 es 3 y num2 es "3" con el == dirá que son iguales al ser mismo numero. 
//Pero si ponemos === dirá que es falso porque no son del mismo tipo de dato
//<=>: Nos hará una comparación con 2 numeros. Dar-a -1 si el primero es menor, 0 si son iguales y 1 si el segundo es mayor

/*
Tipos de datos en PHP:
    simples: int, string, boolean, float (el double de java)
    compuestos: arrays, objetos, ficheros

Tipado de lenguaje de programación:
    - Fuerte (ponemos el tipo de dato en la variable): JAVA
    - Debil (no ponemos el tipo de dato en la variable): PHP, JavaScript 
    Obtener el tipo de la variable "gettype();" 
*/echo "Var1 es del tipo: " . gettype($var1);

/*
-Estructuras de control
if(){}

if(){

}else{

}

if(){

}elseif {

}else{

}
while(){}      do{} while()

$miArray   for($i =0 ; $i<10; $i++){
    $miArray[$i];
}

foreach($array as $elemento){

}

-Inclusión de codigo de un fichero
include, include_once, require, require_once