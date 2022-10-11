<?php

//reto 

$const= 100;

$dinero_user= readline("ingrese la cantidad de dinero que tiene en su disponible");


if($dinero_user>$const){

    $dinero_retirar= readline("cuanto dinero desea retirar master");
    if($dinero_retirar<= $dinero_user){
        echo "ha retirado {$dinero_retirar}";
    }else{
        echo"me ves la cara de estupida";
    }
   
}else{
    echo"aun no puedes retirar estas como medio pobre";
}
