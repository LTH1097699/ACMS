<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinhluongTinhluongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinhluong__tinhluongs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->int('ma_nhanvien');
            $table->int('id_ngachluong');
            $table->int('id_bacluong');
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
        Schema::dropIfExists('tinhluong__tinhluongs');
    }
}
