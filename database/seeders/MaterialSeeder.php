<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => ' EPS'],
            ['name' => ' PEVA'],
            ['name' => ' PU кожа'],
            ['name' => ' PVC'],
            ['name' => ' Tencel'],
            ['name' => ' Акрил'],
            ['name' => ' Алуминий'],
            ['name' => ' Бамбук'],
            ['name' => ' Велкро'],
            ['name' => ' Вълна'],
            ['name' => ' Дунапрен'],
            ['name' => 'Еко кожа'],
            ['name' => ' Еластан'],
            ['name' => ' Каучук'],
            ['name' => ' Кожа'],
            ['name' => ' Мемори пяна'],
            ['name' => ' Метал'],
            ['name' => ' Микрофибър'],
            ['name' => ' Найлон'],
            ['name' => ' Памук'],
            ['name' => ' Пластмаса'],
            ['name' => ' Плюш'],
            ['name' => ' Полар'],
            ['name' => 'Полиестер'],
            ['name' => ' Полиетилен'],
            ['name' => ' Полипропилен'],
            ['name' => ' Полистирен'],
            ['name' => ' Полиуретан'],
            ['name' => ' Полиуретанова пяна'],
            ['name' => ' Пяна'],
            ['name' => ' Силиконова вата'],
            ['name' => ' Стомана'],
            ['name' => ' Стъкло'],
            ['name' => ' Текстил'],
            ['name' => ' Хартия'],
            ['name' => ' Хром'],
        ];

        DB::table('materials')->insert($data);
    }
}
