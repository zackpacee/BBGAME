<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_ID')->unsigned();
            $table->integer('seasons');
            $table->string('season_1',5);
            $table->string('season_2',5);
            $table->string('season_3',5);
            
            $table->foreign('player_ID')->references('player_id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('past_players');
    }
}
