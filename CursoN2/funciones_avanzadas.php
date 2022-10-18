<?php

function sum(...$parm){

    $suma=0;

foreach($parm as $numeros){

$suma += $numeros;

}
echo "la sula total es {$suma}";

}

//sum (1,2,3,4,5,6);

//se puede realiza de manera inversa pero pude haber fallos

function res($a, $b){

    echo "la resta es:". ($a - $b);




}


$arreglo=[1,2,3];//solo agarra los dos primero parametros esto depente de cuantos argumentos hayan;
res(...$arreglo);
