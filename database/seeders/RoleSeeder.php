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
        //
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Departamental']);
        $role3 = Role::create(['name'=>'Municipal']);
        $role4 = Role::create(['name'=>'Base']);
        $role5 = Role::create(['name'=>'Responsable']);

        Permission::create(['name'=>'admin'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        
        Permission::create(['name'=>'admin.rrhh.list'])->syncRoles([$role1, $role2]);        
        Permission::create(['name'=>'admin.rrhh.add'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.rrhh.edit'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name'=>'admin.eess'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.eess.list'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.eess.add'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.eess.edit'])->syncRoles([$role1]);
    }
}
