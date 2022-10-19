<?php

$palabras_juego=["palabra", "cosas", "usb", "extraño","palabra","buenas","okay"];

define("MAX_ATTEPS",6);

echo "juego del ahorcado";
echo "\n";
echo "\n";


//inicializacion del juego


$select_palabra = $palabras_juego[rand(0,7)];

$select_palabra=strtolower($select_palabra);
$tamaño_palabra = strlen($select_palabra);
$discovered_letters = str_pad("",$tamaño_palabra,"_");
$attemps =0;


echo"palabra de  {$tamaño_palabra} letras \n\n ";
echo $discovered_letters . "\n\n";

//se pide que escriba

$player_letter = readline("ingrese una letra:");
$player_letter=strtolower($player_letter);
