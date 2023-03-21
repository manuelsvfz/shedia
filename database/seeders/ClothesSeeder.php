<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClothesType;
use App\Models\Clothes;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clothesTypes = ClothesType::all();

        $clothes = [
            [
                'clotheType_id' => $clothesTypes->where('name', 'Camiseta')->first()->id,
                'size' => 'S',
                'color' => 'Azul',
                'price' => 25.99,
                'gender' => 'female',
                'image' => 'img/camiseta-azul.jpg',
            ],
            [
                'clotheType_id' => $clothesTypes->where('name', 'Pantalones')->first()->id,
                'size' => 'M',
                'color' => 'Negro',
                'price' => 39.99,
                'gender' => 'male',
                'image' => 'img/pantalones-negros.jpg',
            ],
            [
                'clotheType_id' => $clothesTypes->where('name', 'Vestidos')->first()->id,
                'size' => 'L',
                'color' => 'Rojo',
                'price' => 59.99,
                'gender' => 'female',
                'image' => 'img/vestido-rojo.jpg',
            ],
            // ... puedes agregar más instancias de ropa aquí
        ];

        foreach ($clothes as $c) {
            Clothes::create($c);
        }
    }
}
