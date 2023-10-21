<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('stations')->insert([
                    'station' => '東京',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '秋葉原',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '上野',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '日暮里',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '田端',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '池袋',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '新宿',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '代々木',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '渋谷',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '恵比寿',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '大崎',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '品川',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '浜松町',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '新橋',
            ]);
            
            DB::table('stations')->insert([
                    'station' => '赤羽',
            ]);
    }
}
