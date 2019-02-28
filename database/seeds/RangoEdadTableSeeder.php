<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RangoEdadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dim_rangoEdad')->insert([
            [
                'nombre_rangoEdad' => '18-30'
            ],
            [
                'nombre_rangoEdad' => '31-45'
            ],
            [
                'nombre_rangoEdad' => '46-60'
            ],
            [
                'nombre_rangoEdad' => '61-99'
            ]
        ]);


    }
}
