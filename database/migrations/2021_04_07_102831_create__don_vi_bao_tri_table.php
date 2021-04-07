<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonViBaoTriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DonviBaoTri', function (Blueprint $table) {
            $table->id();
            $table->integer('nhaCungCap_id');
            $table->string('diaChi');
            $table->string('nguoiDaiDien');
            $table->string('soDienThoai');
            $table->string('email')->nullable();
            $table->string('maSoThue')->nullable();
            $table->string('ghiChu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DonviBaoTri');
    }
}
