<?php

use Faker\Generator as Faker;

$factory->define(App\dim_producto::class, function (Faker $faker) {
    return [
        //
        'nombre_producto' => $faker->colorName,

    ];
});
