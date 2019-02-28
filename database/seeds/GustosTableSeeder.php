<?php

use Illuminate\Database\Seeder;

class GustosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('Cuantos gustos quieres crear ?', 10);

        $this->command->info("Creando {$count} gustos.");

        // Create the Genre

        $genres = factory(App\dim_gusto::class, $count)->create();

        $this->command->info('Gustos Creadas!');
    }
}
