<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = [
            ['name' => 'Website & web app development'],
            ['name' => 'Android app development'],
            ['name' => '3D animation & creative design'],
            ['name' => 'Video & Photo editing']
        ];

        DB::table('paths')->insert($path);
    }
}
