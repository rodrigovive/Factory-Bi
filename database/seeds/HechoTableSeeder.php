<?php

use Illuminate\Database\Seeder;

class HechoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = 1 . '-' . 5;
        $range = $this->command->ask('Cuantos hechos por fecha?', $r);

        $dates = App\dim_date::all();

        $this->command->info("creando un rango de {$range} hechos para {$dates->count()} fechas .");

        $dates->each(function($date) use ($range){
            factory(App\Hecho::class, $this->count($range))->create([
                'id_date' => $date->id_date,
            ]);;
        });

        $this->command->info('Productos creados!');

    }

    // Return random value in given range
    function count($range)
    {
        return rand(...explode('-', $range));
    }
}
