<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NghiemThuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nghiemthu')->delete();
        DB::table('nghiemthu')->insert([
            ['trangThai' =>'Tạo lịch sửa chữa'],
            ['trangThai' =>'Đang sửa chữa'],
            ['trangThai' =>'Sửa xong, chưa nghiệm thu'],
            ['trangThai' =>'Sửa xong , đã nghiệm thu'],
            ['trangThai' =>'Thanh lý '],
        ]);
    }
}
