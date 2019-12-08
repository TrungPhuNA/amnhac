<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_title');
            $table->string('t_slug');
            $table->string('t_description')->unique();
            $table->string('t_content')->unique();
            $table->string('t_address');
            $table->string('t_avatar')->unique();
            $table->string('t_city');
            $table->tinyInteger('t_status')->default(1);
            $table->tinyInteger('t_categories')->unique();
            $table->dateTime('t_time_start_')->unique();
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
        Schema::dropIfExists('tours');
    }
}
