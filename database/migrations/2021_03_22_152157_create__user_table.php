<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->id();
            $table->string('hoVaTen');
            $table->string('email');
            $table->string('password');
            $table->string('soDienThoai')->nullable();
            $table->tinyInteger('phanQuyen');
            $table->string('maNguoiDung');
            $table->string('diaChi')->nullable();
            $table->integer('khoaPhong_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('User');
    }
}
