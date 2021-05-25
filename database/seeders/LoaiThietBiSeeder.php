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
                'maNhomThietBi' => 'N01'
            ],
            [
                'tenLoaiThietBi' => 'Máy CT',
                'maLoaiThietBi' => 'CTxx',
                'maNhomThietBi' => 'N01'
            ],
            [
                'tenLoaiThietBi' => 'Máy cộng hưởng từ',
                'maLoaiThietBi' => 'MRIx',
                'maNhomThietBi' => 'N01'
            ],
            [
                'tenLoaiThietBi' => 'Máy đo nhịp tim',
                'maLoaiThietBi' => 'DNT',
                'maNhomThietBi' => 'N04'
            ],
            [
                'tenLoaiThietBi' => 'Máy siêu âm',
                'maLoaiThietBi' => 'MSA',
                'maNhomThietBi' => 'N01'
            ],
            [
                'tenLoaiThietBi' => 'Máy X quang',
                'maLoaiThietBi' => 'MXQ',
                'maNhomThietBi' => 'N01'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống nội soi 3D',
                'maLoaiThietBi' => 'NS3D',
                'maNhomThietBi' => 'N11'
            ],
            [
                'tenLoaiThietBi' => 'Dao mổ diện',
                'maLoaiThietBi' => 'DMD',
                'maNhomThietBi' => 'N04'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống gia tốc tuyến tính',
                'maLoaiThietBi' => 'HTGTTT',
                'maNhomThietBi' => 'N05'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống SPECT loại 2 đầu thu',
                'maLoaiThietBi' => 'SPECT',
                'maNhomThietBi' => 'N05'
            ],
            [
                'tenLoaiThietBi' => 'Nội soi chuẩn đoán',
                'maLoaiThietBi' => 'NSCD',
                'maNhomThietBi' => 'N11'
            ],
            [
                'tenLoaiThietBi' => 'Máy hút dịch',
                'maLoaiThietBi' => 'MHD',
                'maNhomThietBi' => 'N02'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống/ thiết bị hồi sức khác',
                'maLoaiThietBi' => 'TBK',
                'maNhomThietBi' => 'N02'
            ],
            [
                'tenLoaiThietBi' => 'Hệ thống chụp cổng hưởng từ',
                'maLoaiThietBi' => 'MRI',
                'maNhomThietBi' => 'N01'
            ],
        ]);
    }
}
