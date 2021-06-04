<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\User; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VilleSeeder::class);
         $this->call(UserSeeder::class);
    }
}
