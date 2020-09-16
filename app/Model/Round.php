<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $table='rounds';
    protected $fillable=['game_id','round_number','quotation_open_time','quotation_end_time','round_open_time','winner_quotation_id','round_payment','bhupa_amount'];
}
