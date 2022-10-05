<?php

//Variables globales
$var1 = 1;
$var2 = 3;


//unset($var2); borrar una variable
function suma($a, $b){ //al ser debilmente tipado no hace falta poner que tipo de dato va a devolver
    global $var1;
    global $var2;
    $var1 = 99;
    $var2 = 100; //Solo cambiará el valor dentro de la funcion. No lo exporta fuera.
    echo "<br><br>Las variables DENTRO de la funcion va1 y var2 son: " . $var1 . " y " . $var2;//No las detecta aun siendo globales si no las añadimos en la funcion con el prefijo global

    //Definicion variables estaticas. Quedaran definidas incluso cuando acabe la funcion. Al ser estatica se mantiene en la clase
    static $varestatica = 0;
    echo "<br>El valor de la var estatica es: " . $varestatica;
    $varestatica++;


    return $a + $b;//Las variables de la funcion son locales. Una vez termina la funcion desaparecen. No se pueden ver desde fuera

}

echo "<br>Las variables FUERA de la funcion va1 y var2 son: " . $var1 . " y " . $var2;
echo "<br>La suma es: " . suma(3,5);

//Resultado variable estatica
echo "<br> LLamada a suma 1º vez: " . suma(3,5);
echo "<br> LLamada a suma 2º vez: " . suma(3,5);
echo "<br> LLamada a suma 3º vez: " . suma(3,5);

//paso de parametros por valor o por referencia(variable)
function restar($op1, $op2){
    $op1 = $op1 - $op2;
    return $op1;
}

echo "<br><br>LLamada por valor en la resta: " . restar(8,3);

//LLamada por referencia & (curiosidad nada mas, no lo utilizaremos)
function restar2(&$var3, $var4){
    $var3--;;
    echo "<br> var 3 vale" . $var3;
}
$var3 = 8;
$var4 = 3;
echo "<br><br>LLamada por valor en la resta: " . restar($var3, 6);
