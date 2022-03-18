<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanlychungChucdanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
     public function up()
     {
         Schema::create('chucdanh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
           $table->increments('id');
             // Your fields
           $table->string('machucdanh', 50);
          $table->string('tenchucdanh');

            $table->timestamps();
        });
    }
=======
    // public function up()
    // {
    //     Schema::create('chucdanh', function (Blueprint $table) {
    //         $table->engine = 'InnoDB';
    //         $table->increments('id');
    //         // Your fields
    //         $table->string('machucdanh', 50);
    //         $table->string('tenchucdanh');

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
        Schema::dropIfExists('chucdanh');
    }
}
