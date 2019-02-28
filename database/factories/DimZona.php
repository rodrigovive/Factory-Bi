<?php

use Faker\Generator as Faker;

$factory->define(App\dim_zona::class, function (Faker $faker) {
    $continents = ['Centro','Costa','Norte','Sur'];
    return [
        //
        'nombre_zona' => $continents[$faker->numberBetween(0,3)],
    ];
});
