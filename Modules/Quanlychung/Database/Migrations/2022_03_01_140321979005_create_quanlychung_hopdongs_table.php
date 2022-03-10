<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanlychunghopdongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('hopdong', function (Blueprint $table) {
    //         $table->engine = 'InnoDB';
    //         $table->increments('id');
            

    //         $table->string('sohopdong');
    //         $table->string('manhanvien');
    //         $table->date('ngayki');
    //         $table->date('ngayketthuc');
    //         $table->date('ngaybatdau');

    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hopdong');
    }
}
