<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' =>'KABORE',
            'prenom' =>'Gilva',
            'pseudo' =>'Fleur',
            'role' =>1,
            'statut' =>1,
            'phone' =>'0022660304013', 
            'email' =>'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

    }
}
