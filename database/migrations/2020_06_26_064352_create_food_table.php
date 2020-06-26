<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('food_category_id');
            $table->foreign('food_category_id')->references('id')->on('food_category');
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurant');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->string('name');
            $table->integer('price');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('food');
    }
}
