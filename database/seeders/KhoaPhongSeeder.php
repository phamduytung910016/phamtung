<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoaPhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khoaphong')->delete();
        DB::table('khoaphong')->insert([
            ['ten' => "Phòng cấp cứu", 'diaChi' => "C9-413"],
            ['ten' => "Phòng hồi phục", 'diaChi' => "D5-405"],
            ['ten' => "Phòng chỉnh hình", 'diaChi' => "D5-405"],
        ]);
    }
}
