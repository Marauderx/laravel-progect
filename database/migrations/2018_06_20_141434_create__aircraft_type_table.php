<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAircraftTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AircraftType', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nameAircraft');
          $table->string('aircraftType');
          $table->string('wingspan');
          $table->string('arrangementSalon');
          $table->string('takeoffWeight');
          $table->string('engineType');
          $table->string('cruisingSpeed');
          $table->string('flightAltitude');
          $table->string('flightRange');
          $table->string('flightTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AircraftType');
    }
}
