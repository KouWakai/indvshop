<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s3path = Storage::disk('s3')->url('uploads/');

        DB::table('homes')->insert([
            'slideOne' => $s3path . 'pexels-stanislav-kondratiev-2977304.jpg',
            'slideTwo' => $s3path . 'pexels-kevin-menajang-1206258.jpg',
            'imgOne' => $s3path . 'pexels-ekrulila-3084342.jpg',
        ]);
    }
}
