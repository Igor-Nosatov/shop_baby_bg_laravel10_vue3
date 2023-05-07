<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Бял'],
            ['name' => 'Черен'],
            ['name' => 'Сив'],
            ['name' => 'Син'],
            ['name' => 'Тъмносин'],
            ['name' => 'Зелен'],
            ['name' => 'Тъмнозелен'],
            ['name' => 'Оранжев'],
            ['name' => 'Червен'],
            ['name' => 'Розов'],
            ['name' => 'Жълт'],
        ];

        DB::table('colors')->insert($data);
    }
}
