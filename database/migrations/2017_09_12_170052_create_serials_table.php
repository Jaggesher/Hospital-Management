<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('serial_date')->nullable(false);
            $table->unsignedInteger('patient')->nullable(false);
            $table->unsignedInteger('position')->nullable(false);
            $table->string('code',10)->nullable(false);
            $table->timestamps();
            $table->foreign('serial_date')->references('id')->on('dates');
            $table->foreign('patient')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serials');
    }
}
