<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Viento'
            ]);

        Categoria::create([
            'nombre' => 'Percusion'
        ]);

        Categoria::create([
            'nombre' => 'Cuerda'
        ]);

        Categoria::create([
            'nombre' => 'Electrico'
        ]);
    
        
        // User::factory(9)->create();

    }
}
