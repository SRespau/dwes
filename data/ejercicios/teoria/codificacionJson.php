<?php

//Serialize, unserialize, json_encode, json_decode

$capitales = [
    "spain" => "madrid",
    "francia" => "paris"
];

$infotrans = ""; //Información trans
$infonotrans = ""; //Información de vuelta a la original

//SERIALIZE
echo "<h3>Información en Serialize</h3>";
$infotrans = serialize($capitales); //Información codificada
echo "<br>Información serializada: ";
var_dump($infotrans);

$infonotrans = unserialize($infotrans); //Deserializamos la info serializada
echo "<br>Información DESserializada: ";
var_dump($infonotrans);

echo "<br><br>";

//JSON
echo "<h3>Información en JSON</h3>";
$infotrans = json_encode($capitales);
echo "<br>Información EN JSON: ";
var_dump($infotrans);

$infonotrans = json_decode($infotrans);
echo "<br>Información original desde JSON: ";
var_dump($infonotrans);
?>