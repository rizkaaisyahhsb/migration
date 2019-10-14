<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('kode_pemeriksaan',10);
            $table->string('nama_pemeriksaan',150);
            $table->integer('harga_normal')->lenght(11);
            $table->string('group_pemeriksaan',191);
            $table->string('major_group_hasil',30);
            $table->string('sub_major_group_hasil',30);
            $table->string('order_satuan',20);
            $table->text('description');
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
        Schema::dropIfExists('pemeriksaan');
    }
}
