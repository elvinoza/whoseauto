<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 6)->unique();
            $table->integer('car_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->dateTime('last_search_time')->nullable();
            $table->integer('views')->default(0);
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
        Schema::drop('autos');
    }
}