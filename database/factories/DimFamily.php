<?php

use Faker as Faker;
use Faker\Generator as Generator;

$factory->define(App\dim_familia::class, function (Generator $faker) {

    $faker->addProvider(new Faker\Provider\Internet($faker));
    return [
        //
        'nombre_familia' => $faker->domainName,
    ];
});
