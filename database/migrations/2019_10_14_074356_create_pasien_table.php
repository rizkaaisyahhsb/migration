<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('kode_pasien',5);
            $table->string('nama',150);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('alamat',191);
            $table->string('email',191);
            $table->string('telp_1',191);
            $table->string('telp_2',191);
            $table->integer('user_klinik')->lenght(11);
            $table->string('klinik_kode',10);
            $table->tinyInteger('apps_activation')->lenght(4);
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
        Schema::dropIfExists('pasien');
    }
}
