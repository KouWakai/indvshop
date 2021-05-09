<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'slideOne' => '/IMG_0477.JPG',
            'slideTwo' => 'IMG_0478.JPG',
            'imgOne' => '/pexels-sourav-mishra-5541995.jpg',
        ]);
    }
}
