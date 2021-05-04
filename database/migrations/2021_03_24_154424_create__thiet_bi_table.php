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
            $table->string('serial')->nullable();
            $table->string('model');
            $table->string('maLoaiThietBi')->nullable();
            $table->string('ruiRo')->nullable();
            $table->string('donViTinh');
            $table->string('soLuong');
            $table->integer('tinhTrang');
            $table->integer('canBoPhuTrach_id');
            $table->integer('canBoSuDung_id')->nullable();
            $table->integer('khoaPhongSuDung_id')->nullable();
            $table->integer('nhaCungCap_id')->nullable();
            $table->integer('donViBaoTri_id')->nullable();
            $table->string('hangSanXuat')->nullable();
            $table->string('xuatXu')->nullable();
            $table->date('namSanXuat');
            $table->integer('kiemDinhDinhKy');
            $table->date('ngayKiemDinhLanDau')->nullable();
            $table->date('ngayNhapKho')->nullable();
            $table->date('ngayHetHanBaoHanh')->nullable();
            $table->string('thongSoKyThuat')->nullable();
            $table->string('cauHinhKyThuat')->nullable();
            $table->integer('giaTriBanDau')->nullable();
            $table->integer('khauHaoHangNam')->nullable();
            $table->date('namSuDung')->nullable();
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
