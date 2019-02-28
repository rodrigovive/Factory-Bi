<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = 0 . '-' . 10;
        $commentRange = $this->command->ask('Cuantos productos por familias?', $r);

        $familias = App\dim_familia::all();

        $this->command->info("creando un rango de {$commentRange} productos para {$familias->count()} familias .");

        $familias->each(function($film) use ($commentRange){
            factory(App\dim_producto::class, $this->count($commentRange))->create([
                'id_familia' => $film->id_familia
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
