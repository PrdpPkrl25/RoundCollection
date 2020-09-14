<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table='games';
    protected $fillable=['owner_id','number_of_players','total_game_span','total_game_price'];
}
