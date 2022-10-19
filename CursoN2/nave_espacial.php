<?php
$precios_cafe =[12,54,21,34,54,13];
//ordenar un arreglo
usort($precios_cafe, function($a,$b){

    return $a <=> $b;
});

var_dump($precios_cafe);