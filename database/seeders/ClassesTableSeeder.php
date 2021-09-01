<?php

namespace Database\Seeders;

use App\Models\Univercity_class;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'First class'
            ],
            [
                'id' => 2,
                'name' => 'Second class'
            ],
            [
                'id' => 3,
                'name' => 'Third class'
            ],
            [
                'id' => 4,
                'name' => 'Forty class'
            ]
        ];

        Univercity_class::insert($classes);
    }
}
