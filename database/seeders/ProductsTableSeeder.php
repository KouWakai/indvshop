<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=25; $i++)
        {
            DB::table('products')->insert([
                'caption' => "Product$i",
                'image' => '/uploads/3QCeEZT5PCIzTA3tnndOJrIkIdgZCxxAfuEqkAxZ.jpg',
                'price' => 1480,
                'category' => 'ネイキッド',
            ]);
        }
    }
}
