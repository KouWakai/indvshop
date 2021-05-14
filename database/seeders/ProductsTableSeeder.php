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
            DB::table('products')->insert([
                ['caption' => "ベルト1", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/3441967_s.jpg', 'price' => 9980, 'category' => 'ベルト',],
                ['caption' => "ベルト2", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/3927435_s.jpg', 'price' => 8980, 'category' => 'ベルト',],
                ['caption' => "革財布1", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/4412294_s.jpg', 'price' => 7500, 'category' => '革財布',],
                ['caption' => "革財布2", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/4686178_m.jpg', 'price' => 9200, 'category' => '革財布',],
                ['caption' => "革財布3", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/4663035_s.jpg', 'price' => 8000, 'category' => '革財布',],
                ['caption' => "革財布4", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/4686177_s.jpg', 'price' => 10000, 'category' => '革財布',],
                ['caption' => "名刺入れ", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/1468301_s.jpg', 'price' => 3980, 'category' => '手帳・小物',],
                ['caption' => "システム手帳1", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/646372_s.jpg', 'price' => 4980, 'category' => '手帳・小物',],
                ['caption' => "システム手帳2", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/563142_s.jpg', 'price' => 4980, 'category' => '手帳・小物',],
                ['caption' => "バッグ1", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/4319202_s.jpg', 'price' => 15000, 'category' => 'バッグ',],
                ['caption' => "バッグ2", 'image' => 'https://laravel1.s3.ap-northeast-3.amazonaws.com/uploads/4827009_s.jpg', 'price' => 17000, 'category' => 'バッグ',],
            ]);
    }
}
