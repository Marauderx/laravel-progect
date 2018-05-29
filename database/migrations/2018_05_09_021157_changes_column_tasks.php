<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangesColumnTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tasks', function (Blueprint $table) {
          $table->dropForeign('tasks_gantt_id_foreign');
          $table->dropColumn('gantt_id');
          //$table->integer('gantt_id')->unsigned();
          //$table->foreign('gantt_id')->references('id')->on('gantts')->onDelete('cascade')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropForeign('tasks_gantt_id_foreign');
      $table->dropColumn('gantt_id');
    }
}
