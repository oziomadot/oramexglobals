<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['name'=>'Frontend', 'description' => 'Frontend development focuses on creating visually appealing and user-friendly interfaces.'],
            ['name'=>'Backend', 'description' => 'Backend development focuses on the logic, database, and server-side programming that power web applications.',],
            ['name'=>'Programing with Chatgpt', 'description' => 'ChatGPT is an artificial intelligence (AI) chatbot that uses natural language processing to create humanlike conversational dialogue.'],

       ];

       DB::table('courses')->insert($courses);
    }
}
