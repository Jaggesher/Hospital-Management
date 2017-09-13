<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->unique()->nullable(false);
            $table->string('sort_msg',150)->nullable(false);
            $table->string('category',150)->nullable(false);
            $table->text('description')->nullable(false);
            $table->unsignedInteger('Money')->nullable(false);
            $table->string('Office',11)->nullable(false);
            $table->time('duty_time')->nullable(false);
            $table->string('img', 50)->nullable(false)->default("image/doctor.jpg");
            $table->timestamps();
            $table->foreign('category')->references('category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
