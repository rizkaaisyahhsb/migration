<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oauth_clients', function (Blueprint $table) {
            $table->increments('id',10);
            $table->integer('user_id')->lenght(11)->index();
            $table->string('name',191);
            $table->string('secret',100);
            $table->text('redirect');
            $table->tinyInteger('personal_access_client')->lenght(1);
            $table->tinyInteger('password_client')->lenght(1);
            $table->tinyInteger('revoked')->lenght(1);
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
        Schema::dropIfExists('oauth_clients');
    }
}
