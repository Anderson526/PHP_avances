<?php

function persona(){

    $num = rand(0,2);
    $frase = "";

    switch($num){
        case 1:
           $frase= "Nunca pares de aprender";
            break;
            case 2:
                $frase= "Las empresas no son familia";
                default:
               $frase= "ni modo";
                break;
    }
    return $frase; // se usa para retornar la variable la cual se esta guardando.
}

echo persona();