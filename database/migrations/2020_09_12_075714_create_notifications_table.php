<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema ::create('notifications', function (Blueprint $table) {
            $table -> id();
            $table -> string('message');
            $table -> integer('user_id');
            $table -> string('link')->nullable();
            $table -> integer('game_id') -> nullable();
            $table -> dateTime('read_at') -> nullable();
            $table -> dateTime('send_at') -> nullable();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema ::dropIfExists('notifications');
    }
}
