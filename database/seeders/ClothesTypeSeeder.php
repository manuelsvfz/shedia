<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClothesType;

class ClothesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clothesTypes = [
            ['name' => 'Camisetas'],
            ['name' => 'Pantalones'],
            ['name' => 'Vestidos'],
            ['name' => 'Faldas'],
            ['name' => 'Chaquetas'],
            ['name' => 'Zapatos'],
            ['name' => 'Accesorios'],
        ];

        foreach ($clothesTypes as $clothesType) {
            ClothesType::create($clothesType);
        }
    }
}
