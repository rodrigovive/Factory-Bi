<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('dim_zona')->insert([
            [
                'nombre_zona' => 'Centro'
            ],
            [
                'nombre_zona' => 'Costa'
            ],
            [
                'nombre_zona' => 'Norte'
            ],
            [
                'nombre_zona' => 'Sur'
            ]
        ]);
    }
}
