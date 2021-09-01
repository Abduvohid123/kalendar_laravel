<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            \Database\Seeders\PermissionTableSeeder::class,
            \Database\Seeders\CreateAdminUserSeeder::class,
            \Database\Seeders\ClassesTableSeeder::class,
            \Database\Seeders\LessonTableSeeder::class
        ]);

    }
}
