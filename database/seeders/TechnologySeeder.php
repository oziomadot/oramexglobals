<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name'=>'HTML5', 'description' => 'The structure and foundation of web pages', 'course_id' => '1'],
            ['name'=>'CSS3', 'description' => 'Styling and layout techniques', 'course_id' => '1'],
            ['name'=>'Responsive Design', 'description' => 'Making websites work on all screen sizes', 'course_id' => '1'],
            ['name'=>'Tailwind CSS', 'description' => 'A utility-first framework for responsive design', 'course_id' => '1'],
            ['name'=>'JavaScript (ES6+)', 'description' => 'The core scripting language for interactivity', 'course_id' => '1'],
            ['name'=>'jQuery', 'description' => 'Simplified JavaScript for easier DOM manipulation', 'course_id' => '1'],
            ['name'=>'Alpine.js', 'description' => 'Lightweight JavaScript framework for minimal frontend interactions', 'course_id' => '1'],
            ['name'=>'Livewire 1', 'description' => 'Bringing dynamic, interactive UI to Laravel applications', 'course_id' => '1'],
            ['name'=>'PHP', 'description' => 'A powerful server-side scripting language', 'course_id' => '2'],
            ['name'=>'Laravel', 'description' => 'A robust PHP framework for modern web applications', 'course_id' => '2'],
            ['name'=>'Livewire 2', 'description' => 'Creating interactive components without JavaScript', 'course_id' => '2'],
            ['name'=>'MySQL', 'description' => 'Database management system for storing and retrieving data', 'course_id' => '2'],
            ['name'=>'RESTful APIs', 'description' => 'Creating APIs for communication between frontend and backend', 'course_id' => '2'],
            ['name'=>'Authentication & Authorization', 'description' => 'User login, roles, and security', 'course_id' => '2'],
            ['name'=>'ChatGpt', 'description' => 'Chat - Generative Pre-trained Transformer', 'course_id' => '3'],
        ];
        DB::table('technologies')->insert($technologies);
    }
}
