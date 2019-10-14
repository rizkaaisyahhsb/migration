<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('order_no',30);
            $table->date('order_date');
            $table->string('status_pasien',20);
            $table->string('product_number',50);
            $table->date('product_expired');
            $table->string('klinik_code',10);
            $table->string('register_number',50);
            $table->string('dokter_id',10);
            $table->string('pasien_code',10);
            $table->integer('user_klinik')->lenght(11);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
