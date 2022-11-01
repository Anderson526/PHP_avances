<?php
    $palabras=array("sol","luna","cielo","otro");

    $form = "<form action='analisis.php' >";

    for($i=0;$i<count($palabras);$i++){
        $form .="La palabra:".str_shuffle($palabras[$i])." ".
        "<input type='text' name='palabra".$i."'>".
        "<br>";
    }
    //html con esteroides
    $button= "<button type='submit'>Enviar</button>";
    $formcierre = "</form>";

    echo $form.$button.$formcierre;


    ?>