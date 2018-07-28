<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_states', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_for')->unsigned();
            $table->integer('hoh')->unsigned();
            $table->integer('nom_1')->unsigned();
            $table->integer('nom_2')->unsigned();
            $table->integer('state')->unsigned();
            $table->integer('veto_winner')->unsigned();
            $table->integer('saved')->unsigned();
            $table->integer('replacement_nom')->unsigned();
            $table->integer('prev_hoh')->unsigned();
            $table->timestamps();
            
            $table->foreign('player_for')->references('player_id')->on('players');
            $table->foreign('hoh')->references('player_id')->on('players');
            $table->foreign('nom_1')->references('player_id')->on('players');
            $table->foreign('nom_2')->references('player_id')->on('players');
            $table->foreign('veto_winner')->references('player_id')->on('players');
            $table->foreign('saved')->references('player_id')->on('players');
            $table->foreign('replacement_nom')->references('player_id')->on('players');
            $table->foreign('prev_hoh')->references('player_id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_states');
    }
}
