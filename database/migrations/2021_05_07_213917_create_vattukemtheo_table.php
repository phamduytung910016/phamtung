<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVattukemtheoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vattukemtheo', function (Blueprint $table) {
            $table->id();
            $table->string('tenVatTu');
            $table->string('maVatTu');
            $table->string('maThietBiTuongUng');
            $table->string('donViTinh')->nullable();
            $table->string('soLuong')->nullable();
            $table->integer('trangThai')->nullable();
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
        Schema::dropIfExists('vattukemtheo');
    }
}
