<?php
for($i=0;$i<count($_REQUEST);$i++){
    $precios = $_REQUEST["valor".$i];
    $resultado= $precios*0.35; 
   echo "el precio con descuento es:". $precios-$resultado. "<br>";
}
