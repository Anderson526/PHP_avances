<?php

$listado = ["jose","pepe"];
$condicion=true;

while($condicion){
    $name = readline("ingrese el nombre:");
    if(in_array($name,$listado)){

            echo "again";
    }else{
        echo "registro existoso";
        array_push($listado,$name);
        print_r($listado);
        $condicion=false;
    }
}




