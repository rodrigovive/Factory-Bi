<?php


use Faker as Faker;
use Faker\Generator as Generator;

$factory->define(App\dim_gusto::class, function (Generator $faker) {

    $faker->addProvider(new Faker\Provider\en_US\Company($faker));
    return [
        //
        'nombre_gustos' => $faker->jobTitle
    ];
});
