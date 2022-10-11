<?php
// $michis = [
// "nombres"=> ["michi1"=>"tomy","michi2"=>"tony","michi3"=>"choni" ],
// "ocupacion"=>["michi1"=>"obrero","michi2"=>"carpintero","michi3"=>"agente secreto"],
// "comidas"=>[
// "favoritas" =>["michi1"=>"manzana","michi2"=>"pera","michi3"=>"arroz" ],
// "no favoritas"=>["michi1"=>"aguacate","michi2"=>"coke","michi3"=>"dulces" ]
// ]

// ];


$listado_michis= array(

  array(

    "nombre"=>"michi 1",
    "ocupacion"=>"operador",
    "comida0"=>array(
        "favorita"=>"arroz, papa, yuca",
        "No favorita"=> "aguacate,aguapanela"

    )
    ),

    [

        "nombre"=>"michi 2",
        "ocupacion"=>"operador2",
        "comida0"=>array(
            "favorita"=>"arroz, papa, yuca",
            "No favorita"=> "aguacate,aguapanela"
    
        )

    ]



    );


echo "nombre de michi: ". $listado_michis[1]["nombre"] . "\n"; 
