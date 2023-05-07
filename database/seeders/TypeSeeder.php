<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => '0-3 месеца'],
            ['name' => 'Всички възрасти '],
            ['name' => 'Жени '],
            ['name' => 'Момичета '],
            ['name' => 'Момчета'],
            ['name' => 'Мъже'],
            ['name' => 'Най-малките'],
        ];

        DB::table('types')->insert($data);
    }
}


