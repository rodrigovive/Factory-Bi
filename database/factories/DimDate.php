<?php

use Faker\Generator as Faker;


$factory->define(App\dim_date::class, function (Faker $faker) {

    $date = $faker->date();
//    $date= DateTime::createFromFormat('y-m-d', $date);
    $date = strtotime($date);
    $day_int = date('y', $date);
    $day =  $faker->dayOfWeek($date);
    $year = date('Y', $date);
    $month_int = date('n', $date);
    $month = date('F', $date);
    $trimestre_int = ceil($month_int/3);
    $trimestre = ['Primero','Segundo','Tercero','Cuarto'][$trimestre_int-1];
    return [
        //
        'fecha' => date( "Y-m-d H:i:s", $date),
        'diaSemana' => $day,
        'anio' => $year,
        'dia' => $day_int,
        'nombreMes' => $month,
        'mes' => $month_int,
        'num_trimestre' => $trimestre_int,
        'trimestre' => $trimestre
    ];
});
