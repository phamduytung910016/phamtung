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
                'maCanBoVatTuPhuTrach' => '20197087',
                'hangSanXuat' => 'LG',
                'xuatXu' =>'Nhật Bản',
                'namSanXuat' =>'2002',
                'kiemDinhDinhKy'=> 1,
            ],
            [
                'tenThietBi' => 'Đầu dò khám tim người lớn',
                'serial' =>'453561636603',
                'model' => 'XS4-2',
                'maThietBi' => '',
                'maLoaiThietBi' =>'MSA',
                'maNhomThietBi' =>'N01',
                'mucDoRuiRo' => 'A',
                'donViTinh' =>'cái',
                'soLuong' => '6',
                'tinhTrang' => 2,
                'maCanBoVatTuPhuTrach' => '20197087',
                'hangSanXuat' => 'LG',
                'xuatXu' =>'Nhật Bản',
                'namSanXuat' =>'2002',
                'kiemDinhDinhKy'=> 1,
            ],
            [
                'tenThietBi' => 'Máy in màu',
                'serial' =>'E76879F70134892',
                'model' => 'HL-L8360',
                'maThietBi' => '',
                'maLoaiThietBi' =>'MSA',
                'maNhomThietBi' =>'N01',
                'mucDoRuiRo' => 'A',
                'donViTinh' =>'cái',
                'soLuong' => '6',
                'tinhTrang' => 3,
                'maCanBoVatTuPhuTrach' => '20197087',
                'hangSanXuat' => 'Brother',
                'xuatXu' =>'Trung Quốc',
                'namSanXuat' =>'2002',
                'kiemDinhDinhKy'=> 1,
            ],
            [
                'tenThietBi' => 'Máy in đen trắng',
                'serial' =>'7063930',
                'model' => 'UP-X898MD',
                'maThietBi' => '',
                'maLoaiThietBi' =>'MSA',
                'maNhomThietBi' =>'N01',
                'mucDoRuiRo' => 'A',
                'donViTinh' =>'cái',
                'soLuong' => '6',
                'tinhTrang' => 4,
                'maCanBoVatTuPhuTrach' => '20197087',
                'hangSanXuat' => 'Sony',
                'xuatXu' =>'Nhật Bản',
                'namSanXuat' =>'2002',
                'kiemDinhDinhKy'=> 1,
            ],
            [
                'tenThietBi' => 'Máy siêu âm màu',
                'serial' =>'US50700071',
                'model' => 'EnVior C HD',
                'maThietBi' => '',
                'maLoaiThietBi' =>'MSA',
                'maNhomThietBi' =>'N01',
                'mucDoRuiRo' => 'A',
                'donViTinh' =>'cái',
                'soLuong' => '6',
                'tinhTrang' => 5,
                'maCanBoVatTuPhuTrach' => '20197087',
                'hangSanXuat' => 'HP',
                'xuatXu' =>'Mĩ',
                'namSanXuat' =>'2002',
                'kiemDinhDinhKy'=> 1,
            ],
            [
                'tenThietBi' => 'Holter theo dõi huyết áp 24h (10 máy con)',
                'serial' =>'US11747108',
                'model' => 'MDTM001',
                'maThietBi' => '',
                'maLoaiThietBi' =>'MSA',
                'maNhomThietBi' =>'N01',
                'mucDoRuiRo' => 'A',
                'donViTinh' =>'cái',
                'soLuong' => '6',
                'tinhTrang' => 6,
                'maCanBoVatTuPhuTrach' => '20197087',
                'hangSanXuat' => 'LG',
                'xuatXu' =>'Nhật Bản',
                'namSanXuat' =>'2002',
                'kiemDinhDinhKy'=> 1,
            ],

        ]);
    }
}
