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
<<<<<<< HEAD
    public function up()
    {
        Schema::create('hopdong', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            

            $table->string('sohopdong');
            $table->string('manhanvien');
            $table->date('ngayki');
            $table->date('ngayketthuc');
            $table->date('ngaybatdau');

            $table->timestamps();
        });
    }
=======
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
>>>>>>> aadb171b943f5cb462414c70ba65c372278224be

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
