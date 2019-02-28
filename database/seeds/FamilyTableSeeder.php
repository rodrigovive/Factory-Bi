<?php

use Illuminate\Database\Seeder;

class FamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $count = (int)$this->command->ask('Cuantas familias quieres crear ?', 10);

        $this->command->info("Creando {$count} familias.");

        // Create the Genre

        $genres = factory(App\dim_familia::class, $count)->create();

        $this->command->info('Familias Creadas!');
    }
}
