<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderFoodTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_food_test', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('order_no',30);
            $table->string('klinik_code',10);
            $table->integer('food_parameter')->lenght(11);
            $table->tinyInteger('parameter_value')->lenght(11);
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
        Schema::dropIfExists('order_food_test');
    }
}
