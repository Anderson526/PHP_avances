<?php


    $form = "<form action='operacion.php' >";

     for($i=0;$i<$_REQUEST["contador"];$i++){

        
        $form .="Valor {$i} :"."<input type='text' name='valor".$i."'>".
        "<br>";
     }


     $button= "<button type='submit'>Enviar</button>";
     $formcierre = "</form>";

     echo $form.$button.$formcierre;


    ?>