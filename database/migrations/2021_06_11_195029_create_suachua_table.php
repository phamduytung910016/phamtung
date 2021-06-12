<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuachuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suachua', function (Blueprint $table) {
            $table->id();
            $table->integer('thietbi_id');
            $table->integer('nghiemThu');
            $table->date('ngaySuaChua')->nullable();
            $table->date('ngaySuaXong')->nullable();
            $table->string('trangThaiTruocKhiSua')->nullable();
            $table->string('trangThaiSauKhiSua')->nullable();
            $table->string('chiPhi')->nullable();
            $table->string('maNguoiLapPhieu');
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
        Schema::dropIfExists('suachua');
    }
}
