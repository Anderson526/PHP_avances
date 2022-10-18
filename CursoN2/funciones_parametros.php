<?php

function rank($platzi_rank){

    if($platzi_rank>=1000){
        echo "eres pro";
    }else{
        echo"aun no eres pro";
    }

}




do{
    $user_register=readline("ingrese la cantidad de puntos que tiene:");

    rank($user_register);
    echo "\n";
}while(true);


