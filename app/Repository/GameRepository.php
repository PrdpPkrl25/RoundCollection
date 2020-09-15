<?php
/**
 * Created by PhpStorm.
 * User: prakashpokhrel
 * Date: 2020-09-15
 * Time: 20:27
 */

namespace App\Repository;


use App\Model\Game;

class GameRepository
{

    public function handleCreate($request)
    {
        $game = Game ::create($request -> all() + ['owner_id' => auth() -> id()]);
        return $game;
    }
}