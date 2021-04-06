<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThietBiHongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bangthietbihong')->delete();
        DB::table('bangthietbihong')->insert([
            ['tenThietBi' => 'Máy siêu âm',
            'tenNguoiDung'=>'Phạm Duy Tùng',
            'khoaPhong'=>'Khoa Chẩn đoán hình ảnh',
            'serial'=>'S001-S010 ',
            'model' =>'Dolphin/4D',
            'maThietBi'=>'N01-MSAxxx-000001',
            'ghiChu' =>'Sản phẩm bị hỏng màn hình',
            'trangThai' => 'Đang báo hỏng']
        ]);
    }
}
