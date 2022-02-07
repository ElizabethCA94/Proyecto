<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Visitante']);

        Permission::create(['name' => 'admin.home']);

        Permission::create(['name' => 'admin.categorias.index']);
        Permission::create(['name' => 'admin.categorias.create']);
        Permission::create(['name' => 'admin.categorias.edit']);
        Permission::create(['name' => 'admin.categorias.destroy']);

        Permission::create(['name' => 'admin.clientes.index']);
        Permission::create(['name' => 'admin.clientes.create']);
        Permission::create(['name' => 'admin.clientes.edit']);
        Permission::create(['name' => 'admin.clientes.destroy']);

        Permission::create(['name' => 'admin.ventas.index']);
        Permission::create(['name' => 'admin.ventas.create']);
        Permission::create(['name' => 'admin.ventas.edit']);
        Permission::create(['name' => 'admin.ventas.destroy']);

        Permission::create(['name' => 'admin.productos.index']);
        Permission::create(['name' => 'admin.productos.create']);
        Permission::create(['name' => 'admin.productos.edit']);
        Permission::create(['name' => 'admin.productos.destroy']);

    }
}
