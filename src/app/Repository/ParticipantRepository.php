<?php


namespace App\Repository;


use App\Events\ParticipantAdded;
use App\Model\Game;
use App\Model\User;
use Illuminate\Support\Str;

class ParticipantRepository
{
    public function handleCreate($data, $game)
    {
        $number_of_participants = count($data['name']);
        for($i = 0; $i < $number_of_participants; $i++) {
            $user = $this -> checkIfUserExist($data['email'][$i]);
            if(!($user instanceof User)) {
                $user = $this -> inviteUserToGame($data, $i);
            }
            $this -> addUserToGame($game, $user);
        }
    }

    public function checkIfUserExist($email)
    {
        return User ::where('email', $email) -> first();
    }

    public function addUserToGame($game, $user)
    {
        $tokenId = random_int(1000, 9999);
        $game -> participants() -> attach($user -> id, ['token_id' => $tokenId]);
        event(new ParticipantAdded($user, $game));
    }

    public function inviteUserToGame($data, $i)
    {
        return User ::create(['name' => $data['name'][$i], 'email' => $data['email'][$i], 'password' => Str ::random(8)]);
    }

}
