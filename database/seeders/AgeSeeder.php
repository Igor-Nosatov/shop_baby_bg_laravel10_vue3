<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => '0-3 месеца'],
            ['name' => '0-6 месеца'],
            ['name' => '0-12 месеца'],
            ['name' => '1-2 години'],
            ['name' => '1-3 години'],
            ['name' => '2-3 години'],
            ['name' => '3-4 години'],
            ['name' => '4-5 години'],
            ['name' => '6-7години'],
            ['name' => '7-8 години'],
            ['name' => '8-9 години'],
            ['name' => '8-10 години'],
            ['name' => '8-11 години'],
            ['name' => '8-12 години'],
        ];

        DB::table('ages')->insert($data);
    }
}
