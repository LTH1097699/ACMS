<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanlychungnoibotctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
<<<<<<< HEAD
     */
    public function up()
    {
        Schema::create('noibotct', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            
            $table->string('madonvi', 50);
            $table->string('tendonvi');

            $table->timestamps();
        });
    }
=======
    //  */
    // public function up()
    // {
    //     Schema::create('noibotct', function (Blueprint $table) {
    //         $table->engine = 'InnoDB';
    //         $table->increments('id');
            
    //         $table->string('madonvi', 50);
    //         $table->string('tendonvi');

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
        Schema::dropIfExists('noibotct');
    }
}
