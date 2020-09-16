<?php
/**
 * Created by PhpStorm.
 * User: prakashpokhrel
 * Date: 2020-09-15
 * Time: 21:38
 */

namespace App\Repository;


use App\Model\Quotation;

class QuotationRepository
{
    public function handleCreate($data)
    {
        return Quotation::create($data);
    }

    public function handleEdit()
    {

    }
}