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

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.categorias.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categorias.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categorias.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categorias.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.clientes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.clientes.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.clientes.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.clientes.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.ventas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.ventas.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.ventas.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.ventas.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.productos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.productos.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.productos.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.productos.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.productos.destroy'])->syncRoles([$role1]); 


    }
}
