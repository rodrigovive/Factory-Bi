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
        $commentRange = $this->command->ask('Cuantas ciudades por zonas?', $r);

        $zonas = App\dim_zona::all();

        $this->command->info("creando un rango de {$commentRange} ciudades para {$zonas->count()} zonas .");

        $zonas->each(function($film) use ($commentRange){
            factory(App\dim_ciudad::class, $this->count($commentRange))->create([
                'id_zona' => $film->id_zona
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
