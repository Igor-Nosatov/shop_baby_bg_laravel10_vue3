<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Рожден ден'],
            ['name' => 'Promo'],
            ['name' => 'Голямото великденско намаление'],
            ['name' => 'Месец на бебешкото хранене '],
        ];

        DB::table('discounts')->insert($data);
    }
}
