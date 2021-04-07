<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThietBiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThietBi', function (Blueprint $table) {
            $table->id();
            $table->string('tenThietBi');
            $table->string('nhomThietBi')->nullable();
            $table->string('loaiThietBi')->nullable();
            $table->string('mucDoRuiRo')->nullable();
            $table->integer('soLuong');
            $table->string('donViTinh');
            $table->double('giaNhap')->nullable();
            $table->string('serial');
            $table->string('model');
            $table->string('nhaCungCap')->nullable();
            $table->string('hangSanXuat');
            $table->string('xuatXu');
            $table->date('namSanXuat');
            $table->integer('kiemDinhDinhKy');
            $table->date('ngayKiemDinhLanDau')->nullable();
            $table->date('ngayNhapKho')->nullable();
            $table->date('ngayHetHanBaoHanh')->nullable();
            $table->string('thongSoKyThuat')->nullable();
            $table->string('cauHinhKyThuat')->nullable();
            $table->integer('giaTriBanDau')->nullable();
            $table->integer('khauHaoHangNam')->nullable();
            $table->integer('khoaPhong_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('tinhTrang')->nullable();
            $table->year('namSuDung')->nullable();
            $table->integer('donViBaoTri_id')->nullable();
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
        Schema::dropIfExists('ThietBi');
    }
}
