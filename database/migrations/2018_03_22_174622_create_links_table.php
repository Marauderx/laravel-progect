<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('source');
            $table->integer('target');
            $table->timestamps();
            $table->integer('gantt_id')->unsigned();
            $table->foreign('gantt_id')->references('id')->on('gantts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');
    }
}
