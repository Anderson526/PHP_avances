<?php
// $contador=0;
// while($contador<10){
//     echo $contador . " ";
//     $contador++;
//     echo "\n";
// }


$user_names = ["uno","dos","tres"];


do{
    $user_name = readline("ingrese un nuevo nombre");

    echo "\n";

}while(in_array($user_name,$user_names ));
