<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Borrar datos?')) {

            // Call the php artisan migrate:fresh using Artisan
            $this->command->call('migrate:fresh');

            $this->command->line("Database cleared.");
        }

//        $this->call(App\dim_zona::class);
//        $this->call(App\dim_ciudad::class);

        $classes =[
            ZonaTableSeeder::class,
            CiudadTableSeeder::class,
            DateTableSeeder::class,
            FamilyTableSeeder::class,
            ProductTableSeeder::class,
            RangoEdadTableSeeder::class,
            GustosTableSeeder::class,
            RedSocialTableSeeder::class
        ];

        $this->call($classes);

        $this->command->info("Database seeded.");

        // Re Guard model
        Eloquent::reguard();

    }
}
