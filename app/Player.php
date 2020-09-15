<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table='players';
    protected $fillable=['player_name','phone_number','email','profile_picture'];

    public function games(){
        return $this->belongsToMany(Game::class,'games_players','player_id','game_id')->withTimestamps();
    }
}
