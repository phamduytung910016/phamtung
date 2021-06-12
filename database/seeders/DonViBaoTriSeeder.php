<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonViBaoTriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donvibaotri')->delete();
        DB::table('donvibaotri')->insert([
            [
                'nhaCungCap_id' => 1,
                'diaChi' => '4a/ngách 14/79 Dương Quảng Hàm , phường Quan Hoa , quận Cầu Giấy',
                'nguoiDaiDien' => 'Nguyễn Văn Tuấn',
                'soDienThoai' => '0123456789',
                'email' => 'tuan@gmail.com',
                'maSoThue' =>'',
                'ghiChu' => 'Làm việc giờ hành chính',
                'tenDonViBaoTri' =>'Đơn vị bảo trì 1'
            ]
        ]);
    }
}
