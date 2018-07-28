<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_ID')->unsigned();
            $table->integer('place')->default(0);
            $table->timestamps();
            
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
        Schema::dropIfExists('season_players');
    }
}
