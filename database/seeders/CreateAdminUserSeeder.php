<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'zaxira/abduvohid.jpeg'
        ]);
        $teacher = User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'zaxira/abduvohid.jpeg'
        ]);
        $teacher2 = User::create([
            'name' => 'teacher2',
            'email' => 'teacher2@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'zaxira/abduvohid.jpeg'
        ]);
        $teacher3 = User::create([
            'name' => 'teacher3',
            'email' => 'teacher3@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'zaxira/abduvohid.jpeg'
        ]);
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'zaxira/abduvohid.jpeg'
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();
        unset($permissions[2]);
        $role->syncPermissions($permissions);

        $admin->assignRole([$role->id]);


        $permissions = [
            14 => 'class-create',
            15 => 'class-edit',
            16 => 'class-delete',
            17 => 'lesson-list',
            18 => 'lesson-create',
            19 => 'lesson-edit',
            20 => 'lesson-delete',
            21=>'class-list'
        ];


        $role=Role::create(['name' => 'user']);
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $permissions[1]='teacher';
        $role=Role::create(['name' => 'teacher']);
        $role->syncPermissions($permissions);
        $teacher->assignRole([$role->id]);


        $teacher2->assignRole([$role->id]);

        $teacher3->assignRole([$role->id]);


    }
}
