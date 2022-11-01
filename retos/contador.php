<?php
    $form = "<form action='descuentos_vista.php'>";


        $form .="ingrese el numero de campos"."<input type='text' name='contador'>".
        "<br>";  
    
    $button= "<button type='submit'>Enviar</button>";
    $formcierre = "</form>";

    echo $form.$button.$formcierre;