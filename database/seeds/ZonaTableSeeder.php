<?php

use Illuminate\Database\Seeder;

class ZonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $count = (int)$this->command->ask('Cuantas zonas quieres crear ?', 10);

        $this->command->info("Creando {$count} zonas.");

        // Create the Genre

        $genres = factory(App\dim_zona::class, $count)->create();

        $this->command->info('Zonas Creadas!');
    }
}
