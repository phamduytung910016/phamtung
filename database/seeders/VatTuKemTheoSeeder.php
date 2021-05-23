<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VatTuKemTheoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vattukemtheo')->delete();
        DB::table('vattukemtheo')->insert([
            [
                'tenVatTu' => 'keo bôi trơn',
                'maVatTu' =>  '000333444',
                'maThietBiTuongUng' => 'CCDHA01-19062020-2',
                'donViTinh' => 'lọ',
                'soLuong' => 2,
            ]
        ]);
    }
}
