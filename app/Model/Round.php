<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $table='rounds';
    protected $fillable=['number_of_rounds','game_id','winner_id','winning_bid','round_payment'];
}
