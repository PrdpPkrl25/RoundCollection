<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games_players', function (Blueprint $table) {
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('player_id');
            $table->foreign('game_id')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('player_id')->references('id')->on('games')->onDelete('cascade');
            $table->primary(['game_id','player_id']);
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
        Schema::dropIfExists('games_players');
    }
}
