<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Illuminate\Database\Seeder;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //下指令時(php artisan db:seed),會清空之前的資料,重新跑新資料
        Cgy::truncate();
        //呼叫factory的假資料,跑100筆
        Cgy::factory()->times(100)->create();
    }
}