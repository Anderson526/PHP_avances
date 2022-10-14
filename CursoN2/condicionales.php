<?php
$var1= readline("ingrese el numero a comparar");
$var2= 20;

if($var1 == $var2){
    echo"son iguales";

}else if($var1 < $var2){
    echo "{$var1} es menor que {$var2}"; 
}else{
    echo"ya no quiero trabajar";
}