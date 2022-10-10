<?php
// $edades =[
// "carlos" => 18,
// "lopez" => 29,
// "maria" => 10
// ];

// echo "la edad de carlos es " .  $edades["carlos"];

// $cafes = [
//     "capuccino"=> 50, 
//     "cafe" => 40,
//     "americano" => 11
// ];
// echo "el precio del cafe americano es de: {$cafes["americano"]}";


$personas = [

    "jose" => [
        "nombre"=> "jose", 
        "edad" => 12,
        "apellido"=> "rodriguez jimenez",
        "otro"=> [
            "numero"=> 2
        ]
    ],

    "sofia"=>[
        "edad" => 15,
        "apellido"=> "rodriguez pepes"
    ]

];

echo $personas["jose"]["nombre"]. " ". $personas["jose"]["apellido"]. "\n";
echo $personas["jose"]["otro"]["numero"] . "\n";