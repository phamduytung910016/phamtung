<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();
        DB::table('user')->insert([
            ['hoVaTen' => 'Phạm Duy Tùng',
            'email' => 'tung@gmail.com',
            'password' => bcrypt('123456789'),
            'soDienThoai' => '0699699999',
            'phanQuyen' => 1,
            'khoaPhong_id' => '1',
            'maNguoiDung' => '20182876',
            'diaChi' => '4a/ngách 14/Dương Quảng Hàm/Phường Quan Hoa/Quận Cầu Giấy'
            ]
        ]);
    }
}
