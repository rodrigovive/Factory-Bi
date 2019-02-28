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
        $range = $this->command->ask('Cuantos productos por familias?', $r);

        $families = App\dim_familia::all();

        $this->command->info("creando un rango de {$range} productos para {$families->count()} familias .");

        $families->each(function($family) use ($range){
            factory(App\dim_producto::class, $this->count($range))->create([
                'id_familia' => $family->id_familia
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
