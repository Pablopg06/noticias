<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'User_comun']);

        Permission::create(['name'=>'home'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'noticias.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'noticias.show'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'noticias.create'])->assignRole($role1);
        Permission::create(['name'=>'noticias.edit'])->assignRole($role1);
        Permission::create(['name'=>'noticias.destroy'])->assignRole($role1);
        Permission::create(['name'=>'noticias.publicar'])->assignRole($role1);
    }
}
