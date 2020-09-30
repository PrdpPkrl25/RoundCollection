<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations';
    protected $fillable = ['user_id', 'round_id', 'bidding_amount', 'comment'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
