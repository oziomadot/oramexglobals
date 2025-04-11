<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppDevsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appdevs = [
            ['name' => 'Website Development'],
            ['name' => 'Web App Development'],
            ['name' => 'Android App Development']
        ];

        DB::table('app_devs')->insert($appdevs);
    }
}
