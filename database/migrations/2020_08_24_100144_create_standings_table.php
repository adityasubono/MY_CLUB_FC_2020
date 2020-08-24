<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('club');
            $table->integer('played');
            $table->integer('win');
            $table->integer('draw');
            $table->integer('lose');
            $table->integer('goal_scored');
            $table->integer('goal_conceded');
            $table->integer('goal_difference');
            $table->integer('points');
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
        Schema::dropIfExists('standings');
    }
}
