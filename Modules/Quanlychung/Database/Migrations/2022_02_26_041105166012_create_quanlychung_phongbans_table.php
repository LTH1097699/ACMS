<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanlychungPhongbansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    public function up()
    {
        Schema::create('phongban', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields

            $table->integer('maphong');
            $table->string('tenphong',100);
            $table->string('dienthoai');

            $table->timestamps();
        });
    }
=======
    // public function up()
    // {
    //     Schema::create('phongban', function (Blueprint $table) {
    //         $table->engine = 'InnoDB';
    //         $table->increments('id');
    //         // Your fields

    //         $table->integer('maphong');
    //         $table->string('tenphong',100);
    //         $table->string('dienthoai');

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
        Schema::dropIfExists('phongban');
    }
}
