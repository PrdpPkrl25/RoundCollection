<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema ::create('payments', function (Blueprint $table) {
            $table -> id();
            $table -> integer('round_id');
            $table -> integer('user_id');
            $table -> dateTime('notified_at') -> nullable();
            $table -> dateTime('paid_at') -> nullable();
            $table -> decimal('kista_amount',10,2);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema ::dropIfExists('payments');
    }
}
