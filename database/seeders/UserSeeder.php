<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Elizabeth',
            'email' => 'ecarreno@unal.edu.co',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Camila',
            'email' => 'cmmartinez@unal.edu.co',
            'password' => bcrypt('12345678')
        ])->assignRole('Visitante');

        User::create([
            'name' => 'Daniel',
            'email' => 'dgaviriag@unal.edu.co',
            'password' => bcrypt('12345678')
        ])->assignRole('Visitante');
        
        
        // User::factory(9)->create();

    }
}
