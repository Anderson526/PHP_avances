
<?php
$conditional=true;
$input= "Ingrese el input: <input type='text' placeholder='conceptos php'>";
$arreglin=array("pedro","lucas","sofia","horacio");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?= $input ?><!--manera simplificada de llamar o escribir php  -->

<?php if($conditional==true):?>
    <p>Es true</p>
<?php else:?>
    <p>Es false</p>
<?php endif ?>

<!-- ciclos html y php ; recursividad -->
<ul>
<?php for($i=0; $i<count($arreglin);$i++): ?>

  <?="<li>$arreglin[$i]</li>"?>

  <?php endfor; ?>
</ul>


</body>
</html>