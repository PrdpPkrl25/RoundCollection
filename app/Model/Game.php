<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['user_id', 'number_of_participants', 'each_kista', 'total_amount', 'quotation_day','quotation_time','opening_day',
    'opening_time','start_date', 'end_date','active_status','pay_interval','pay_day_after_opening'];

    public function players()
    {
        return $this -> belongsToMany(User::class, 'games_users');
    }

    public function rounds()
    {
        return $this -> hasMany(Round::class);
    }
}
