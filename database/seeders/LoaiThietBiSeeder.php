<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiThietBiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaithietbi')->delete();
        DB::table('loaithietbi')->insert([
            [
                'tenLoaiThietBi' => 'Hệ thống chụp mạch số hóa xóa nền(DSA)',
                'maLoaiThietBi' => 'DSA',
                'maNhomThietBi' => 'N1 Thiết bị chẩn đoán hình ảnh'
            ],
            [
                'tenLoaiThietBi' => 'Máy CT',
                'maLoaiThietBi' => 'CTxx',
                'maNhomThietBi' => 'N1 Thiết bị chẩn đoán hình ảnh'
            ],
            [
                'tenLoaiThietBi' => 'Máy cộng hưởng từ',
                'maLoaiThietBi' => 'MRIx',
                'maNhomThietBi' => 'N1 Thiết bị chẩn đoán hình ảnh'
            ],
            [
                'tenLoaiThietBi' => 'Máy đo nhịp tim',
                'maLoaiThietBi' => 'DNT',
                'maNhomThietBi' => 'N4 Thiết bị phòng mổ'
            ],
            [
                'tenLoaiThietBi' => 'Máy siêu âm',
                'maLoaiThietBi' => 'MSA',
                'maNhomThietBi' => 'N1 Thiết bị chẩn đoán hình ảnh'
            ],
            [
                'tenLoaiThietBi' => 'Máy X quang',
                'maLoaiThietBi' => 'MXQ',
                'maNhomThietBi' => 'N1 Thiết bị chẩn đoán hình ảnh'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống nội soi 3D',
                'maLoaiThietBi' => 'NS3D',
                'maNhomThietBi' => 'N11 Thiết bị nội soi chuẩn đoán'
            ],
            [
                'tenLoaiThietBi' => 'Dao mổ diện',
                'maLoaiThietBi' => 'DMD',
                'maNhomThietBi' => 'N4 Thiết bị phòng mổ'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống gia tốc tuyến tính',
                'maLoaiThietBi' => 'HTGTTT',
                'maNhomThietBi' => 'N5 Thiết bị chuyên khoa ung bướu và y học hạt nhân'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống SPECT loại 2 đầu thu',
                'maLoaiThietBi' => 'SPECT',
                'maNhomThietBi' => 'N5 Thiết bị chuyên khoa ung bướu và y học hạt nhân'
            ],
            [
                'tenLoaiThietBi' => 'Nội soi chuẩn đoán',
                'maLoaiThietBi' => 'NSCD',
                'maNhomThietBi' => 'N11 Thiết bị nội soi chuẩn đoán'
            ],
            [
                'tenLoaiThietBi' => 'Máy hút dịch',
                'maLoaiThietBi' => 'MHD',
                'maNhomThietBi' => 'N2 Thiết bị hồi sức cấp cứu'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống/ thiết bị hồi sức khác',
                'maLoaiThietBi' => 'TBK',
                'maNhomThietBi' => 'N2 Thiết bị hồi sức cấp cứu'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống chụp cổng hưởng từ',
                'maLoaiThietBi' => 'MRI',
                'maNhomThietBi' => 'N1 Thiết bị chẩn đoán hình ảnh'
            ],
        ]);
    }
}
