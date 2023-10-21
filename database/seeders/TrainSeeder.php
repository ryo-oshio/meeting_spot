<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('trains')->insert([
                    'train' => '山手線',
            ]);
            
            DB::table('trains')->insert([
                    'train' => '上野東京ライン',
            ]);
            
            DB::table('trains')->insert([
                    'train' => '湘南新宿ライン',
            ]);
    }
}
