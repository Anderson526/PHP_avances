<?php


function clear(){   //funcion para limpiar la pantalla en win y linux
    if(PHP_OS == "WINT"){
        system("csl");
    }else{
        system("clear");
    }
}

$palabras_juego=["palabra", "cosas", "usb", "extraño","palabra","buenas","okay"];

define("MAX_ATTEPS",6); //constante de numero de intentos

echo "///////////////////////Juego del ahorcado///////////////////";
echo "\n";
echo "\n";


//inicializacion del juego


$select_palabra = $palabras_juego[rand(0,7)]; //selecciona una palabra en modo aleatoreo del arreglo

$select_palabra=strtolower($select_palabra); //modifica la letra y la convierte a minuscula
$tamaño_palabra = strlen($select_palabra);
$discovered_letters = str_pad("",$tamaño_palabra,"_");
 $attemps =0;


function print_man() {  //funcion para imprimir al muñequito dependiendo de los casos del numero de intento

    global $attemps;
    
    switch ($attemps) {

        case 0:
            echo "
            +---+
            |   |
                |
                |
                |
                |
            =========
            ";
            break;
           
        case 1:
            echo "
            +---+
            |   |
            O   |
                |
                |
                |
            =========
            ";
            break;

        case 2:
            echo "
            +---+
            |   |
            O   |
            |   |
                |
                |
            =========
            ";
            break;

        case 3:
            echo "
            +---+
            |   |
            O   |
           /|   |
                |
                |
            =========
            ";
            break;

        case 4:
            echo "
            +---+
            |   |
            O   |
           /|\  |
                |
                |
            =========
            ";
            break;

        case 5:
            echo "
            +---+
            |   |
            O   |
           /|\  |
           /    |
                |
            =========
            ";
            break;

        case 6:
            echo "
            Me mataste we
            +---+
            |   |
            O   |
           /|\  |
           / \  |
                |
            =========
            ";
            break;

    

    echo "\n\n";

}

}


do{



echo"palabra de  {$tamaño_palabra} letras \n\n ";
echo $discovered_letters . "\n\n";

//se pide que escriba

$player_letter = readline("ingrese una letra:");
$player_letter=strtolower($player_letter);



if(str_contains($select_palabra,$player_letter)){ // esta funcion se utiliza para saber si una letra esta dentro de un string.

    //se verifica todas las ocurrencias para remplazar la letra

    $offset=0;

    while(($letter_position= strpos($select_palabra,$player_letter,$offset)) !==false){  //recorre el arreglo de las palabras identificando si estan las letras , si no cierra ciclo

        $discovered_letters[$letter_position]= $player_letter;
        $offset= $letter_position+1;

    }
}




else{


    clear();
    $attemps++;
    echo "Letra incorrecta, te quedan " . (MAX_ATTEPS - $attemps) . " intentos";  //controla el numero de intentos del jugador

   print_man();

    sleep(1); //pausar ejecucion en segundos
}

clear();


}while($attemps< MAX_ATTEPS && $discovered_letters !=$select_palabra);

clear();
if($attemps< MAX_ATTEPS){
    echo"You win";

}else{
    echo "-------------------------------------Game over------------------------------------------- \n";
    echo "*******************la palabra era: {$select_palabra} ************************************ \n";

}



echo "\n";




