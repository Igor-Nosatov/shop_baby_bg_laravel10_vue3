<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Върни до 30 дни'],
            ['name' => 'Вземи на лизинг'],
            ['name' => 'Преглед на пратката'],
            ['name' => '24/7 обслужване'],
            ['name' => 'Сигурно плащане'],
            ['name' => 'Гаранция за качество'],
        ];

        DB::table('features')->insert($data);
    }
}
