<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table='games';
    protected $fillable=['owner_id','no_of_players'];
}
