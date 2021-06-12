<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinhTrangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tinhtrang')->delete();
        DB::table('tinhtrang')->insert([
            ['tinhTrang'=>'Chưa bàn giao'],
            ['tinhTrang'=>'Đang sử dụng'],
            ['tinhTrang'=>'Đang báo hỏng'],
            ['tinhTrang'=>'Đang sửa chữa'],
            ['tinhTrang'=>'Ngưng sử dụng'],
            ['tinhTrang'=>'Đã thanh lý'],
        ]);
    }
}
