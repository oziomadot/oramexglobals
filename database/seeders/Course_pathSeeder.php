<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Course_pathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_path = [
            ['path_id'=>'1', 'course_id'=>'1'],
            ['path_id'=>'1', 'course_id'=>'2'],
            ['path_id'=>'1', 'course_id'=>'3'],
            ['path_id'=>'2', 'course_id'=>'1'],
            ['path_id'=>'2', 'course_id'=>'2'],
            ['path_id'=>'2', 'course_id'=>'3'],
            // ['path_id'=>'3'],
            // ['path_id'=>'4'],
        ];

        DB::table('course_path')->insert($course_path);

    }
}
