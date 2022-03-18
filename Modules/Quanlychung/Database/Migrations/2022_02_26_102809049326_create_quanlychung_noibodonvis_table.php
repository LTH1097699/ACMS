<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanlychungnoibodonvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    public function up()
    {
        Schema::create('noibodonvi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            
            $table->string('tencongviec');


            $table->timestamps();
        });
    }
=======
    // public function up()
    // {
    //     Schema::create('noibodonvi', function (Blueprint $table) {
    //         $table->engine = 'InnoDB';
    //         $table->increments('id');
            
    //         $table->string('tencongviec');


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
        Schema::dropIfExists('noibodonvi');
    }
}
