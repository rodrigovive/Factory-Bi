<?php

use Faker as Faker;
use Faker\Generator as Generator;

$factory->define(App\dim_producto::class, function (Generator $faker) {

    $faker->addProvider(new Faker\Provider\es_ES\Company($faker));

    return [
        //
        'nombre_producto' => $faker->catchPhrase

    ];
});
