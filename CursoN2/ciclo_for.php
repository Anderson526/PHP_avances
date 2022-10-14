<?php
//pruebas de ejecucion con este ciclo for (tabla de multiplicacion)

$reg= readline("ingrese la tabla de multiplicar que desea consultar: ");

for($i=1; $i<11; $i++){

    echo $reg ." x ".$i . "=".$reg*$i . "\n";
}