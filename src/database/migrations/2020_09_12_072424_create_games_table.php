<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema ::create('games', function (Blueprint $table) {
            $table -> increments('id');
            $table -> integer('user_id');
            $table -> integer('number_of_participants');
            $table -> integer('each_kista');
            $table -> integer('total_amount');
            $table -> integer('quotation_day');
            $table -> integer('opening_day');
            $table -> integer('pay_day_after_opening');
            $table -> time('quotation_time');
            $table -> integer('quotation_length');
            $table -> time('opening_time');
            $table -> dateTime('start_date');
            $table -> dateTime('end_date');
            $table -> boolean('owner_as_first_bidder');
            $table -> integer('first_bidding_amount');
            $table -> boolean('active_status')->default(0);
            $table -> string('pay_interval')->default('monthly');
            $table -> integer('bhupa_amount');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema ::dropIfExists('games');
    }
}
