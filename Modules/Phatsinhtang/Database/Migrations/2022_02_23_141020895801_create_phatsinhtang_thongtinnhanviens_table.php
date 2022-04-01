<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhatsinhtangThongtinnhanviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('thongtinnhanvien', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ma_nhanvien');
            $table->string('hovaten', 50);
            $table->string('gioitinh', 5);
            $table->date('ngaysinh');
            $table->string('cmnd');
            $table->date('ngaycap');
            $table->string('noicap');
            $table->string('tongiao');
            $table->string('dantocthieuso');
            $table->text('diachi');
            $table->string('chuyenmon');
            $table->integer('trinhdo');
            $table->string('vanban_chungchi');
            $table->string('macongviec', 50);
            $table->string('maphong');
            $table->integer('sohopdong');
            $table->string('mangach',50);
            $table->float('mucluonghientai');
            $table->integer('ma_donvi');
            $table->integer('ma_trangthai');
            $table->string('hinhanh', 200);

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
        Schema::dropIfExists('thongtinnhanvien');
    }
}
