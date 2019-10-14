<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('name',191);
            $table->string('email',191)->unique();
            $table->string('password',191);
            $table->string('klinik_id',10);
            $table->integer('roles_id')->lenght(11);
            $table->integer('pasien_id')->lenght(11);
            $table->integer('dokter_id')->lenght(11);
            $table->char('lang_default',2);
            $table->rememberToken();
            $table->timestamp('last_login_at');
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
        Schema::dropIfExists('users');
    }
}
