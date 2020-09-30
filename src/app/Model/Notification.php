<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['user_id', 'message', 'read_at','send_at','game_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


}
