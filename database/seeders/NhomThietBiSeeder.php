<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhomThietBiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhomthietbi')->delete();
        DB::table('nhomthietbi')->insert([
            ['tenNhomThietBi' => 'N1 Thiết bị chẩn đoán hình ảnh',
            'maNhomThietBi' => 'N01'],
            ['tenNhomThietBi' => 'N2 Thiết bị hồi sức cấp cứu',
            'maNhomThietBi' => 'N02'],
            ['tenNhomThietBi' => 'N3 Thiết bị lọc máu',
            'maNhomThietBi' => 'N03'],
            ['tenNhomThietBi' => 'N4 Thiết bị phòng mổ',
            'maNhomThietBi' => 'N04'],
            ['tenNhomThietBi' => 'N5 Thiết bị chuyên khoa ung bướu và y học hạt nhân',
            'maNhomThietBi' => 'N05'],
            ['tenNhomThietBi' => 'N6 Thiết bi chuyên khoa RHM-THM-Mắt',
            'maNhomThietBi' => 'N06'],
            ['tenNhomThietBi' => 'N7 Thiết bị chuyên khoa xét nghiệmt',
            'maNhomThietBi' => 'N07'],
            ['tenNhomThietBi' => 'N8 Thiết bị kiểm soát nhiễm khuẩn',
            'maNhomThietBi' => 'N08'],
            ['tenNhomThietBi' => 'N9 Thiết bị chuyên khoa sản nhi',
            'maNhomThietBi' => 'N09'],
            ['tenNhomThietBi' => 'N10 Thiết bị thăm dò chức năng',
            'maNhomThietBi' => 'N10'],
            ['tenNhomThietBi' => 'N11 Thiết bị nội soi chuẩn đoán',
            'maNhomThietBi' => 'N11'],
            ['tenNhomThietBi' => 'N12 Thiết bị hồi phục chức năng- Vật lý trị liệu',
            'maNhomThietBi' => 'N12'],
            ['tenNhomThietBi' => 'N13 Thiết bị dùng chung',
            'maNhomThietBi' => 'N13'],
            ['tenNhomThietBi' => 'N14 Thiết bị khám- điều trị khác',
            'maNhomThietBi' => 'N14'],
        ]);
    }
}
