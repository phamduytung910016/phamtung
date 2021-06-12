<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KiemDinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kiemdinh')->delete();
        DB::table('kiemdinh')->insert([
            ['thoiGian'=>'1 tháng'],
            ['thoiGian'=>'2 tháng'],
            ['thoiGian'=>'3 tháng'],
            ['thoiGian'=>'6 tháng'],
            ['thoiGian'=>'12 tháng'],
            ['thoiGian'=>'18 tháng'],
            ['thoiGian'=>'24 tháng'],
            ['thoiGian'=>'36 tháng'],
        ]);
    }
}
