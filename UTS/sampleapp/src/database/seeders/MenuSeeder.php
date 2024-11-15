<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::insert([
        [
            'name' => 'Mie Gacoan Spesial',
            'price' => 25000,
            'stock' => 100,
            'description' => 'Mie pedas dengan pilihan level kepedasan',
        ],
        [
            'name' => 'Mie Gacoan Ayam',
            'price' => 23000,
            'stock' => 150,
            'description' => 'Mie dengan ayam crispy yang menggugah selera',
        ],
        [
            'name' => 'Mie Gacoan Terasi',
            'price' => 24000,
            'stock' => 120,
            'description' => 'Mie dengan sambal terasi yang pedas',
        ],
        ]);
    }
}
