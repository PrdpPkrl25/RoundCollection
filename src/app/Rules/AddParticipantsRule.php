<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AddParticipantsRule implements Rule
{
    public $game;

    /**
     * Create a new rule instance.
     *
     * @param $game
     */
    public function __construct($game)
    {
        $this->game=$game;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $emails=$this->game->participants()->get()->pluck('email')->toArray();
        $counts=array_count_values($value);
        foreach ($value as $val ){
            if($counts[$val]>1 || in_array($val,$emails)){
                return false;
                }
            }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A Participant email is used twice.';
    }
}
