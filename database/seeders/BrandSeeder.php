<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Lorelli'],
            ['name' => 'Tega Baby'],
            ['name' => 'Bébé-Jou'],
            ['name' => 'KikkaBoo'],
            ['name' => 'OK Baby'],
            ['name' => 'BabyJem'],
            ['name' => 'Pampers'],
            ['name' => 'Бочко'],
            ['name' => 'Babyono'],
            ['name' => 'Canpol'],
            ['name' => 'Chicco'],
            ['name' => 'Chipolino'],
            ['name' => 'Mustela'],
            ['name' => 'Bebe Confort'],
            ['name' => 'Бебо'],
            ['name' => 'Lara'],
            ['name' => 'Pufies'],
            ['name' => 'Baby Crema'],
            ['name' => 'Event'],
            ['name' => 'XKKO'],
            ['name' => 'Air Val'],
            ['name' => 'Sansin'],
            ['name' => 'Uriage'],
            ['name' => 'Sterntaler'],
            ['name' => 'Thermobaby'],
            ['name' => 'Friendly Organic'],
            ['name' => 'Reer'],
            ['name' => 'NUK'],
            ['name' => 'Bambo Nature'],
            ['name' => 'Lenor'],
            ['name' => 'Teo Bebe'],
            ['name' => 'Weleda'],
            ['name' => 'Ubbi'],
            ['name' => 'Beaba'],
            ['name' => 'Fuernis'],
            ['name' => 'Bambino Casa'],
            ['name' => 'Brush Baby'],
            ['name' => 'Sevi Baby'],
            ['name' => 'SANO'],
            ['name' => 'Mommy Care'],
            ['name' => 'Luma'],
            ['name' => 'Wooden Spoon'],
            ['name' => 'Tierra Verde'],
            ['name' => 'Moni'],
            ['name' => 'Bonjourbebe'],
            ['name' => 'Tri-Bio'],
            ['name' => 'Microlife'],
            ['name' => 'Libero'],
            ['name' => 'Petit Praia'],
            ['name' => 'Cam'],
            ['name' => 'Wee Baby'],
            ['name' => 'Angelcare'],
            ['name' => 'Zewa'],
            ['name' => 'Bebelan'],
            ['name' => 'Felce Azzurra'],
            ['name' => 'Lorenay'],
            ['name' => 'Bio Baby'],
            ['name' => 'Miniland'],
            ['name' => 'Hipp'],
            ['name' => 'Vital'],
            ['name' => 'Baby'],
            ['name' => 'Sebamed'],
            ['name' => 'Tommee'],
        ];

        DB::table('brands')->insert($data);
    }
}
