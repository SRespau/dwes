<?php
//Los elementos son hetereogeneos, se puede poner cualquier tipo de dato dentro.
//Es como hashMap de Java, clave-valor. Internamente php le añade una posicion a los datos. 0-1-2-3...
$miArray = array(1, "hola", 3.2, true, false);

echo "<br> Elemento 2 del array: " . $miArray[2];

//Mostrar arrays --> foreach, var_dump, print_r
foreach($miArray as $elmto){
    echo "<br>el elemento es: " . $elmto;
}
echo "<br>";
print_r($miArray);

echo "<br>";
var_dump($miArray);

echo "<br> Longitud del array: " . count($miArray);

//Podemos cambiar los datos al vuelo. La forma correcta de ponerlo sería en columna para mejor visualizacion
$array2 = [
    3,
    2,
    5,
    9
];
echo "<br>";
//En este caso no cambia nada porque utilizamos referencias para la nueva variable
foreach($array2 as $elto){
    $elto = $elto * 2;
    echo "<br> Valor del elto: " . $elto;
}
print_r($array2);
echo "<br>";
//Aqui le pasamos el valor por variable en vez de valor. No paso la referencia del valor, cambio el propio valor
//Para ello utilizamos el "&" como comienzo de la variable
foreach($array2 as &$elto){
    $elto = $elto * 2;
    echo "<br> Valor del elto: " . $elto;
}
print_r($array2);

//Añadir elemento a la array. Lo incluira siempre al final como nuevo si no le pongo posicion. La ultima posicion la incrementa en 1
$array22[] = 15;
echo "<br>";
print_r($array2);

//Para borrar elementos de una array (y para borrar variables) usamos "unset(). Se carga el indice/clave del array tambien"
unset($array2[2]);
print_r($array2);
//Si insertamos un elemento nuevo a la array lo hara al final. Para rellenar la posicion eliminada sera $array2[2] = 15;

echo "<br>";
//Mostrar clave y valor del array. La c contrendrá las claves y la v los valores. Izquierda y derecha. print_r o var_dump ya lo hace
foreach($array2 as $c => $v){
    echo "<br> Clave: " . $c . " Valor: " . $v;
}

//Poner claves personalizadas a la array. Solo admite numeros enteros y strings
$persona = array(
    "edad" => 23,
    "peso" => 75,
    "casado" => false,
    "dni" => "78234512D",
    8 => "nss"
);

echo "<br>";
print_r($persona);

//array multidimensionales (matrices)
$arrm = [
    0 => [1, 3],
    1 => [5, 7, 9]
];
echo "<br>" . $arrm[1][1]; //Posicion1, elemento 1 -> 7