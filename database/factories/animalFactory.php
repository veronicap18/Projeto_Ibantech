<?php

use Faker\Generator as Faker;

$factory->define(App\animal::class, function (Faker $faker) {
    $nome_animal = [
        'Gorila',
        'Cachorro',
        'Baleia',
        'Tucano'
    ];

    $esp_animal = [
    	'Gorilla gorilla',
    	'Canis lupus familiaris',
    	'Mysticeti',
    	'Ramphastidae'
    ];

    return [
    	'nome_animal' => $nome_animal[rand(0,3)],
    	'esp_animal'=> $esp_animal[rand(0,3)],
    	'unidades' => rand(1,50),
    	'num_setor' => rand(1,50)
    ];
});
