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
            'slideOne' => '/uploads/JGjx8mLwdbgdXRdvSybHfzNz7Onq0SHwiZwDQOQT.jpg',
            'slideTwo' => 'uploads/dIWEZKlu0T1wxMDj22wmHhkdIGNtyxZP5VeLwkJc.jpg',
            'imgOne' => '/uploads/KHDWJhtIhoRPY2gNtB6jGoFx218M6ZCG6RUvaQbP.jpg',
        ]);
    }
}
