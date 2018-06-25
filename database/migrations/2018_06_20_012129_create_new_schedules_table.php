<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newSchedules', function (Blueprint $table) {
          $table->increments('id');
          $table->string('number');
          $table->date('beginning');
          $table->date('ending');
          $table->string('type');
          $table->string('configuration');
          $table->string('airportOfDeparture');
          $table->time('timeOfMaintenanceOne')->default('4000');
          $table->time('timeOfDeparture');
          $table->string('airportOfArriving');
          $table->time('timeOfArriving');
          $table->time('timeOfMaintenanceTwo')->default('4000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newSchedules');
    }
}
