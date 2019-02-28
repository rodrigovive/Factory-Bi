<?php

use Faker\Generator as Faker;

$factory->define(App\dim_ciudad::class, function (Faker $faker) {
    return [
        //
        'nombre_ciudad' => $faker->city,
        'zipCode_ciudad' => $faker->postcode,
//        'id_zona' => function () {
//            // Get random genre id
//            return App\dim_zona::inRandomOrder()->first()->id;
//        },
    ];
});
