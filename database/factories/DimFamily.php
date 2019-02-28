<?php

use Faker\Generator as Faker;

$factory->define(App\dim_familia::class, function (Faker $faker) {
    return [
        //
        'nombre_familia' => $faker->lastName,
    ];
});
