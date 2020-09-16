<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema ::create('rounds', function (Blueprint $table) {
            $table -> id();
            $table -> integer('game_id');
            $table -> string('round_number');
            $table -> dateTime('quotation_open_time');
            $table -> dateTime('quotation_end_time');
            $table -> dateTime('round_open_time');
            $table -> integer('winner_quotation_id')->nullable();
            $table -> decimal('round_payment', 10, 2)->nullable();
            $table -> decimal('bhupa_amount', 10, 2);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema ::dropIfExists('rounds');
    }
}
