<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'Guitarra acustica',
            'descripcion' => 'Marca Gibson',
            'precio' => 800000,
            'imagen' => '20220210134128.jpg',
            'categoria_id' => 3,
        ]);

        Producto::create([
            'nombre' => 'Guitarra electrica',
            'descripcion' => 'Marca Gibson',
            'precio' => 900000,
            'imagen' => '20220210141503.jpg',
            'categoria_id' => 4,
        ]);


        // User::factory(9)->create();

    }
}
