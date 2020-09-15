<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table='games';
    protected $fillable=['owner_id','number_of_players','total_game_span','total_game_price','day_played','start_date'];

    public function players(){
        return $this->belongsToMany(Player::class,'games_players')->withTimestamps();
    }

    public function rounds(){
        return$this->hasMany(Round::class);
    }
}
