<?php

$posicion= (int) readline("ingrese la posicion:  ");
$anterior=0;
$actual=1;


for($i=2;$i<=$posicion;$i++){

    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;


   // echo $actual . "\n";
}



echo "hay {$actual} formas de llegar" . "\n";
echo "\n";
