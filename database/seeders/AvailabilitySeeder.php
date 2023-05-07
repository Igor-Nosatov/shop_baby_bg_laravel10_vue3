<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'На склад'],
            ['name' => 'На склад - Ограничена наличност'],
            ['name' => 'При доставчик'],
            ['name' => 'С доставка до 14 дни'],
            ['name' => 'С доставка до 3 дни'],
            ['name' => 'С доставка до 7 дни'],
        ];

        DB::table('availabilities')->insert($data);
    }
}
