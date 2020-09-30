<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['user_id', 'number_of_participants', 'each_kista', 'total_amount','bhupa_amount', 'quotation_day','quotation_time','quotation_length','opening_day',
    'opening_time','start_date', 'end_date','active_status','pay_interval','pay_day_after_opening','owner_as_first_bidder','first_bidding_amount'];

    protected $attributes=['pay_interval'=>'monthly'];

    public function participants()
    {
        return $this -> belongsToMany(User::class, 'games_users')->withPivot('token_id');
    }

    public function owner()
    {
        return $this -> belongsTo(User::class,'user_id');
    }

    public function rounds()
    {
        return $this -> hasMany(Round::class);
    }
}
