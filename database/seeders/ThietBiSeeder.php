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
                'tenThietBi' => 'Máy siêu âm màu',
                'serial' =>'60534W55',
                'model' => 'Logic P3 Express',
                'maThietBi' => 'CCDHA01-19062020-2',
                'maLoaiThietBi' =>'CDHA',
                'donViTinh' => 'cái',
                'soLuong' => '1',
                'tinhTrang' => '1',
                'canBoPhuTrach_id' => '2',
                'nhaCungCap_id' => '1',
                'donViBaoTri_id' =>'1'
            ]
        ]);
    }
}
