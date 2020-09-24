<?php

namespace App\Repository;


use App\Model\Quotation;
use Illuminate\Support\Facades\Auth;

class QuotationRepository
{
    public function handleCreate($data,$round)
    {
        return Quotation::create($data+['user_id'=>Auth::id(),'round_id'=>$round->id]);
    }

    public function handleEdit()
    {

    }
}
