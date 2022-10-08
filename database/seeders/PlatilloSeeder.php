<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillo::create(['nombre' => 'sushi', 'precio' => '120.00', 'categoria_id' => 1]);
        Platillo::create(['nombre' => 'Pizza', 'precio' => '210.00', 'categoria_id' => 1]);
        Platillo::create(['nombre' => 'Hamburguesa', 'precio' => '180.00', 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Tostada de ceviche', 'precio' => '80.00', 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Nugguets', 'precio' => '70.00', 'categoria_id' => 3]);
        Platillo::create(['nombre' => 'Sopa', 'precio' => '55.00', 'categoria_id' => 3]);
    }
}
