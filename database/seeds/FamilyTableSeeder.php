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
        $count = (int)$this->command->ask('Cuantas familias quieres crear ?', 20);

        $this->command->info("Creando {$count} familias.");

        $families = factory(App\dim_familia::class, $count)->create();

        $this->command->info('Familias Creadas!');
    }
}
