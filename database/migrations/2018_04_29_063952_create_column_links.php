<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('links', function (Blueprint $table) {
          $table->integer('gantt_id')->unsigned();
          $table->foreign('gantt_id')->references('id')->on('gantts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('links', function($table) {
          $table->dropColumn('gantt_id');
        });
    }
}
