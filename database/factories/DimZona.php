<?php

use Faker\Generator as Faker;

$factory->define(App\dim_zona::class, function (Faker $faker) {
    return [
        //
        'nombre_zona' => $faker->country,
    ];
});
