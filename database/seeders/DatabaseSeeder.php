<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Posts
        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);
        Permission::create(['name' => 'read post']);
        //Cats
        Permission::create(['name' => 'create cat']);
        Permission::create(['name' => 'edit cat']);
        Permission::create(['name' => 'delete cat']);
        Permission::create(['name' => 'read cat']);
        //admin role
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        //member role
        $role = Role::create(['name' => 'member']);
        $role->givePermissionTo('create post');
        $role->givePermissionTo('edit post');
        $role->givePermissionTo('delete post');
        $role->givePermissionTo('read post');

        $user=User::create(
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('123456'),
            ]
            );
            $user->assignRole('admin');
    }
}
