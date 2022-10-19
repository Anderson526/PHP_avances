<?php

function obtener_hora(){
    return date(" h:i a");
 
}

echo "hola ¿Me podrias decir que hora es? \n";
echo "claro, son las" . obtener_hora();


echo "\n";