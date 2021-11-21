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
        //create role
        $admin = Role::create(['name' => 'admin']);
        //create permissions
        $create_post = Permission::create(['name' => 'create post']);
        $edit_post = Permission::create(['name' => 'edit post']);
        $delete_post = Permission::create(['name' => 'delete post']);
        //to assign permission to role
        $admin->syncPermissions([$create_post, $edit_post, $delete_post]);
    }
}
