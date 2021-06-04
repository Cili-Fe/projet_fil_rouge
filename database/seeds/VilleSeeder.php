<?php

use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villes')->insert([

            ['id' => '1', 'ville' => 'Ouagadougou'],
            ['id' => '2', 'ville' => 'Bobo Dioulasso'],
            ['id' => '3', 'ville' => 'Koudougou'],
            ['id' => '4', 'ville' => 'Ouahigouya'],
            ['id' => '5', 'ville' => 'Ziniaré']
        ]);
    }
}
