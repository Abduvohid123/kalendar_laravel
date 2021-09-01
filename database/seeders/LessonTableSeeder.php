<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
            [
                'id'         => 1,
                'name'=>'tarix',
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 1,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 2,
                'name'=>'adabiyot',

                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 1,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 3,
                'name'=>'matematika',

                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 1,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 4,
                'name'=>'chettili',

                'teacher_id' =>3,
                'class_id'   => 2,
                'weekday'    => 1,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 5,
                'name' => 'tarix',

                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 2,
                'start_time' => '08:00',
                'end_time'   => '10:00',
            ],
            [
                'id'         => 6,
                'name'=>'tarix',
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 2,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 7,
                'name'=>'tarix',
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 2,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 8,
                'name'=>'tarix',
                'teacher_id' => 3,
                'class_id'   => 2,
                'weekday'    => 3,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 9,
                'name'=>'tarix',
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 3,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 10,
                'name'=>'tarix',
                'teacher_id' => 2,
                'class_id'   => 3,
                'weekday'    => 3,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 11,
                'name'=>'tarix',
                'teacher_id' => 2,
                'class_id'   => 4,
                'weekday'    => 4,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 12,
                'name'=>'tarix',
                'teacher_id' => 2,
                'class_id'   => 3,
                'weekday'    => 4,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 13,
                'name'=>'tarix',
                'teacher_id' => 3,
                'class_id'   => 2,
                'weekday'    => 4,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 14,
                'name'=>'tarix',
                'teacher_id' => 3,
                'class_id'   => 2,
                'weekday'    => 5,
                'start_time' => '08:00',
                'end_time'   => '10:00',
            ],
            [
                'id'         => 15,
                'name'=>'tarix',
                'teacher_id' => 4,
                'class_id'   => 4,
                'weekday'    => 5,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 16,
                'name'=>'tarix',
                'teacher_id' => 2,
                'class_id'   => 3,
                'weekday'    => 5,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
        ];

        Lesson::insert($lessons);
    }
}
