<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phanquyen')->delete();
        DB::table('phanquyen')->insert([
            ['quyen' => 'Quản trị viên'],
            ['quyen' => 'Nhân viên khoa phòng'],
            ['quyen' => 'Nhân viên vật tư'],
        ]);
    }
}
