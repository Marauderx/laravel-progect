<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewTableSchedols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('schedules', function (Blueprint $table) {
        $table->increments('id');
        $table->string('number');
        $table->date('beginning');
        $table->date('ending');
        $table->string('type');
        $table->string('configuration');
        $table->string('airportOfDeparture');
        $table->time('timeOfDeparture');
        $table->string('airportOfArriving');
        $table->time('timeOfArriving');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
