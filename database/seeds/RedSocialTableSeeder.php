<?php

use Illuminate\Database\Seeder;

class RedSocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dim_redSocial')->insert([
            [
                'nombre_redSocial' => 'Facebook'
            ],
            [
                'nombre_redSocial' => 'Instagram'
            ],
            [
                'nombre_redSocial' => 'Twitter'
            ],
            [
                'nombre_redSocial' => 'Youtube'
            ]
        ]);
    }
}
