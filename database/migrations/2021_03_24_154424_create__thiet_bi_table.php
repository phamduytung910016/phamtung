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
            $table->string('serial');
            $table->string('model');
            $table->string('maThietBi')->nullable();
            $table->string('maLoaiThietBi');
            $table->string('maNhomThietBi');
            $table->string('mucDoRuiRo')->nullable();
            $table->string('donViTinh');
            $table->string('soLuong');
            $table->integer('tinhTrang');
            $table->string('maCanBoVatTuPhuTrach');
            $table->string('maCanBoKhoaPhongPhuTrach')->nullable();
            $table->integer('idKhoaPhongSuDung')->nullable();
            $table->integer('idNhaCungCap')->nullable();
            $table->integer('idDonViBaoTri')->nullable();
            $table->string('hangSanXuat');
            $table->string('xuatXu');
            $table->year('namSanXuat');
            $table->integer('kiemDinhDinhKy');
            $table->date('ngayKiemDinhLanDau')->nullable();
            $table->date('ngayNhapKho')->nullable();
            $table->date('ngayHetHanBaoHanh')->nullable();
            $table->string('thongSoKyThuat')->nullable();
            $table->string('cauHinhKyThuat')->nullable();
            $table->integer('giaTriBanDau')->nullable();
            $table->integer('khauHaoHangNam')->nullable();
            $table->integer('giaTriHienTai')->nullable();
            $table->year('namSuDung')->nullable();
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
