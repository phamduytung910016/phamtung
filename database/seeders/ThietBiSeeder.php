<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThietBiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ThietBi')->delete();
        DB::table('ThietBi')->insert([
            [
                'tenThietBi' => 'Máy siêu âm Doppler màu chuyên tim (03 đầu dò)',
                'serial' =>'US118D1058',
                'model' => 'Afiniti 50',
                'maThietBi' => '',
                'maLoaiThietBi' =>'MSA',
                'maNhomThietBi' =>'N01',
                'mucDoRuiRo' => 'A',
                'donViTinh' =>'cái',
                'soLuong' => '6',
                'tinhTrang' => 1,
                'canBoVatTuPhuTrach' => 'Ngô Hiền Phương',
                'hangSanXuat' => 'LG',
                'xuatXu' =>'Nhật Bản',
                'namSanXuat' =>'2002',
                'kiemDinhDinhKy'=> 1,
            ],
        
        ]);
    }
}
