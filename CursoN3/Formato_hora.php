<?php

function clear(){   //funcion para limpiar la pantalla en win y linux
    if(PHP_OS == "WINT"){
        system("csl");
    }else{
        system("clear");
    }
}
//-----------------------------------ingreso de datos--------------
$hora=readline("ingrese la hora:  \n");
$minutos= readline("ingrese los minutos: \n");
$formato=readline("ingrese el formato AM o PM:  \n");

$formato=strtoupper($formato);

//--------------------------------condicional para la ejecucion del programa--------

if($hora>12 || $minutos>60  ){

    echo"no funciona";
    sleep(1);
    clear();
return 0;

}else{
 
    $hora1=0;

 //------------------conversor--------------------
        
        if($hora==12 && $formato == "AM"){
            $horam = 0;

            
        }elseif($formato == "PM"){
       

          $horam= $hora+12;

      

           
        }


}

//-----------------------impresion del programa---------------------
echo "\n\n";
echo "la hora ingresada es: ". $hora . "h : ". $minutos . "mn " . $formato."\n\n";
echo "la hora ingresada en militar es: ". $horam . "horas : ". $minutos ."minutos \n\n";

sleep(3);
    clear();