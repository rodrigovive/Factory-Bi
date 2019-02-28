<?php

use Faker\Generator as Faker;

$factory->define(App\Hecho::class, function (Faker $faker) {
    $sexos = ['Hombre','Mujer'];
    return [
        //
        'id_redSocial' => function () {
            return App\dim_redSocial::inRandomOrder()->first()->id_redSocial;
        },
        'id_producto' => function () {
            return App\dim_producto::inRandomOrder()->first()->id_producto;
        },
        'id_familia' => function () {
            return App\dim_familia::inRandomOrder()->first()->id_familia;
        },
        'id_ciudad' => function () {
            return App\dim_ciudad::inRandomOrder()->first()->id_ciudad;
        },
        'id_zona' => function () {
            return App\dim_zona::inRandomOrder()->first()->id_zona;
        },
        'id_gustos' => function () {
            return App\dim_gusto::inRandomOrder()->first()->id_gustos;
        },
        'id_rangoEdad' => function () {
            return App\dim_rangoEdad::inRandomOrder()->first()->id_rangoEdad;
        },
        'num_clicks' => $faker->numberBetween(0,10),
        'num_prints' => $faker->numberBetween(0,10),
        'sexo' => $sexos[$faker->numberBetween(0,1)]
    ];
});
