<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopDongHopdongTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopdong__hopdong_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('hopdong_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['hopdong_id', 'locale']);
            $table->foreign('hopdong_id')->references('id')->on('hopdong__hopdongs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hopdong__hopdong_translations', function (Blueprint $table) {
            $table->dropForeign(['hopdong_id']);
        });
        Schema::dropIfExists('hopdong__hopdong_translations');
    }
}
