<?php
$edades=[18,25,48];
//count- muestra el numero de elementos
echo count($edades);
// array_push - añade nuevo elemento
array_push($edades , 10);
//vardump - inspeccionar el arreglo de manera completa
var_dump($edades);
//is_array - confirmar si es un arreglo o no 
$undefined="";
var_dump( is_array($undefined));
//explode 
$lista="fresa,cereza,manzana";
$lista_array= explode(",", $lista);

var_dump($lista_array);
//implode - pasar de arreglo a string

$ejemplo=["4",4,5];

$stringis= implode(",", $ejemplo);


var_dump($stringis);

echo "\n";

