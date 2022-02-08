<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nombre' => 'Elizabeth',
            'apellido' => 'Carreño',
            'telefono' => '12345678',
            'direccion' => 'cra 22 # 11-23']); 

        Cliente::create([
            'nombre' => 'Camila',
            'apellido' => 'Martinez',
            'telefono' => '1332345678',
            'direccion' => 'cra 21 # 11-23']);

        Cliente::create([
            'nombre' => 'Daniel',
            'apellido' => 'Gaviria',
            'telefono' => '198765',
            'direccion' => 'cra 22 # 11-23']);
        
        
        

    }
}
