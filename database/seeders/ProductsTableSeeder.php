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
                ['caption' => "ベルト1", 'image' => '/3927435_s.jpg', 'price' => 9980, 'category' => 'ベルト',],
                ['caption' => "ベルト2", 'image' => '/3441967_s.jpg', 'price' => 8980, 'category' => 'ベルト',],
                ['caption' => "革財布1", 'image' => '/4686178_m.jpg', 'price' => 7500, 'category' => '革財布',],
                ['caption' => "革財布2", 'image' => '/4686177_s.jpg', 'price' => 9200, 'category' => '革財布',],
                ['caption' => "革財布3", 'image' => '/4663035_s.jpg', 'price' => 8000, 'category' => '革財布',],
                ['caption' => "革財布4", 'image' => '/4412294_s.jpg', 'price' => 10000, 'category' => '革財布',],
                ['caption' => "名刺入れ", 'image' => '/1468301_s.jpg', 'price' => 3980, 'category' => '手帳・小物',],
                ['caption' => "システム手帳1", 'image' => '/563142_s.jpg', 'price' => 4980, 'category' => '手帳・小物',],
                ['caption' => "システム手帳2", 'image' => '/646372_s.jpg', 'price' => 4980, 'category' => '手帳・小物',],
                ['caption' => "バッグ1", 'image' => '/1466011_s.jpg', 'price' => 15000, 'category' => 'バッグ',],
                ['caption' => "バッグ2", 'image' => '/1873416_s.jpg', 'price' => 17000, 'category' => 'バッグ',],
            ]);
        }
    }
}
