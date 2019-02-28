<?php
use Faker as Faker;

use Faker\Generator as Generator;

$factory->define(App\dim_ciudad::class, function (Generator $faker) {
    $faker->addProvider(new Faker\Provider\es_PE\Address($faker));
    return [
        //
        'nombre_ciudad' => $faker->state,
        'zipCode_ciudad' => $faker->postcode,
//        'id_zona' => function () {
//            // Get random genre id
//            return App\dim_zona::inRandomOrder()->first()->id;
//        },
    ];
});
