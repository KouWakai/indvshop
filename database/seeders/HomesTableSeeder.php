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
            'slideOne' => '/pexels-stanislav-kondratiev-2977304.jpg',
            'slideTwo' => '/pexels-kevin-menajang-1206258.jpg',
            'imgOne' => '/pexels-ekrulila-3084342.jpg',
        ]);
    }
}
