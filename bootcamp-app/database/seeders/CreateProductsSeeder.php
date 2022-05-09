<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Indomie Goreng Rendang',
            'description' => 'Produk Mie Kemasan terenak di Dunia',
            'stock' => 20,
            'price' => 3000,
        ]);

        Product::create([
            'name' => 'Mie Gelas Rendang',
            'description' => 'Mie 1000-an sobat anak kost-an',
            'stock' => 100,
            'price' => 1000,
        ]);

        Product::create([
            'name' => 'Bakmi Mewah',
            'description' => 'Khusus untuk crazy rich aja',
            'stock' => 80,
            'price' => 10000,
        ]);
    }
}
