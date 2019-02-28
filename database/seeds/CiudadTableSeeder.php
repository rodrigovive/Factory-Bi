<?php

use Illuminate\Database\Seeder;

class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = 0 . '-' . 3;
        $range = $this->command->ask('Cuantas ciudades por zonas?', $r);

        $regions = App\dim_zona::all();

        $this->command->info("creando un rango de {$range} ciudades para {$regions->count()} zonas .");

        $regions->each(function($region) use ($range){
            factory(App\dim_ciudad::class, $this->count($range))->create([
                'id_zona' => $region->id_zona
            ]);;
        });

        $this->command->info('Ciudades creadas!');

    }

    // Return random value in given range
    function count($range)
    {
        return rand(...explode('-', $range));
    }
}
