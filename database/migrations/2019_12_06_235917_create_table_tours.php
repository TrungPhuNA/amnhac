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
            $table->string('t_title')->unique();
            $table->string('t_slug');
            $table->string('t_description');
            $table->string('t_content');
            $table->string('t_address');
            $table->string('t_avatar')->nullable();
            $table->string('t_banner')->nullable();
            $table->tinyInteger('t_hot')->default(0);
            $table->string('t_city');
            $table->tinyInteger('t_status')->default(1);
            $table->integer('t_category_id');
            $table->dateTime('t_time_start');
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
