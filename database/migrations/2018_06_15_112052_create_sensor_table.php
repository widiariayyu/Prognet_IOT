<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wind')->nullable();
            $table->string('rainfalls')->nullable();
            $table->string('humidities')->nullable();
            $table->string('temperatures')->nullable();
            $table->string('intensity')->nullable();
            $table->boolean('rain_status')->nullable();
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
        Schema::dropIfExists('sensor');
    }
}
