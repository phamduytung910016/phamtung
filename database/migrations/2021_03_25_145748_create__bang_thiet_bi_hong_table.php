<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangThietBiHongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangthietbihong', function (Blueprint $table) {
            $table->id();
            $table->string('tenThietBi');
            $table->string('tenNguoiDung');
            $table->string('khoaPhong');
            $table->string('serial')->nullable();
            $table->string('model')->nullable();
            $table->string('maThietBi')->nullable();
            $table->string('ghiChu')->nullable();
            $table->string('trangThai')->default('Đang báo hỏng');
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
        Schema::dropIfExists('bangthietbihong');
    }
}
