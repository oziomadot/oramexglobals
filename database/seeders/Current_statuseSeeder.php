<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Current_statuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentstatus = [
            ["name" => 'Student'],
            ["name" => 'Graduate waiting for service'],
            ["name" => 'Graduate serving'],
            ["name" => 'Job applicant'],
            ["name" => 'Self employed'],
            ["name" => 'Working but below my level'],
            ["name" => 'Working and saticified'],
            ["name" => 'Business'],

        ];

        DB::table('currentstatuses')->insert($currentstatus);
    }
}
