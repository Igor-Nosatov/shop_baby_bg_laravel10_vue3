<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Бебешки и детски колички'],
            ['name' => 'Бебешки и детски стаи'],
            ['name' => 'Бебешки и детски матраци'],
            ['name' => 'Бебешки дрехи и обувки'],
            ['name' => 'Бебешка и детска храна'],
            ['name' => 'Бебешки и детски аксесоари'],
            ['name' => 'Бебешки играчки'],
            ['name' => 'Книги и музика за деца'],
            ['name' => 'Бебешка и детска козметика'],
            ['name' => 'Бебешки и детски кърпи и бански'],
            ['name' => 'Автокресла и столчета за хранене.'],

        ];

        DB::table('categories')->insert($data);
    }
}
