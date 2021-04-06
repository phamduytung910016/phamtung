<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhacungcap')->delete();
        DB::table('nhacungcap')->insert([
            [
                'tenNhaCungCap' => 'Công ty Phương Đông',
                'diaChi' => '39 Khương trung, Thanh Xuân, Hà Nội',
                'nguoiDaiDien' => 'Nguyễn Kiên Anh',
                'soDienThoai' => '0123456789',
                'email' => 'kienanh@gmail.com'
            ]
        ]);
    }
}
