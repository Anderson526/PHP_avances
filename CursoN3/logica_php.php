<?php

// $edad=readline("Porfavor ingrese la edad del niño: ");
// $edad=(int)$edad;

// if($edad<5 && $edad>0){
//     echo"El estudiante con {$edad} años tendrá sus jugetes en la parte inferior";
// }else if($edad>=5 && $edad<=7){
//     echo "El estudiante con {$edad} años tendrá sus juguetes en la parte media de la bodega";

// }else if($edad>7){
//     echo"El estudiante con {$edad} años tendrá sus juguetes en la parte alta de la bodega";
// }else if($edad <1 ){
//     echo "Tiene espacio en la bodega de al lado";
// }


// $altura=readline("ingrese la altura del arbol:");


// for($i=0;$i<$altura;$i++){


// echo str_repeat("*",$i) ."\n";

// }



function arbolEnteroIcons(int $longitud):void {
    $espaciosEnBlanco = $longitud;
    echo str_repeat(" ", $espaciosEnBlanco) . "⭐ \n";

    # Hojas
    for ($i=1; $i <= $longitud; $i++) { 
      echo str_repeat(" ", $espaciosEnBlanco);
      echo str_repeat("🌳", $i) . "\n";
      $espaciosEnBlanco--;
    }

    # Base del árbol
    echo str_repeat(" ", ceil($longitud/2));
    echo str_repeat("💼", floor($longitud/2 + 1));
  }


  echo "¿De qué longitud quieres el arbolito? ";
	fscanf(STDIN, "%d", $longitud); //input por consola

  echo arbolEnteroIcons($longitud);




