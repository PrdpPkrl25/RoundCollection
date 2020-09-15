<?php


namespace App\Repository;


use App\Player;

class PlayerRepository
{

    public function handleCreate($request){
        $game=session()->get('game');
        $numberOfPlayers=count($request->all()['player_name']);
        for($i=0;$i<$numberOfPlayers;$i++) {
            $player=Player::create(['player_name' => $request->all()['player_name'][$i], 'email' => $request->all()['email'][$i]]);
            $player->games()->attach($game->id);
        }
        session()->forget('game');
    }

}
