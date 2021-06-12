<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaohongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baohong', function (Blueprint $table) {
            $table->id();
            $table->string('maNguoiBaoHong');
            $table->integer('thietbi_id');
            $table->date('ngayBaoHong')->nullable();
            $table->string('lyDo')->nullable();
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
        Schema::dropIfExists('baohong');
    }
}
