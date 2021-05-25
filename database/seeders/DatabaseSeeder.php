<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(KhoaPhongSeeder::class);
        //$this->call(UserSeeder::class);
        //$this->call(ThietBiHongSeeder::class);
        //$this->call(DonViBaoTriSeeder::class);
        //$this->call(NhaCungCapSeeder::class);
         $this->call(ThietBiSeeder::class);
        //$this->call(VatTuKemTheoSeeder::class);
        //$this->call(NhomThietBiSeeder::class);
        //$this->call(LoaiThietBiSeeder::class);
    }
}
