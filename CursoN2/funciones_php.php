<?php
function get_pokemon(){

    $numero_aleatorio= rand( 1, 5); //numeros aleatoreos con rand 

//switch 
    switch ($numero_aleatorio){
        case 1:
            echo "pikachu";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "mewtwo";
            break;
            default:
            echo "no se encontro en el sistema";
    }
}

get_pokemon();
echo "\n";