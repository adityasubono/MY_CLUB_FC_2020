<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->string('stadium');
            $table->string('player_gol_home');
            $table->string('player_gol_away');
            $table->string('date');
            $table->string('time');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
            //
        });
    }
}
