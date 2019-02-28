<?php

use Illuminate\Database\Seeder;

class DateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('Cuantas fechas quieres crear ?', 1000);

        $this->command->info("Creando {$count} fechas.");

        $dates = factory(App\dim_date::class, $count)->create();

        $this->command->info('Fechas Creadas!');
    }
}
