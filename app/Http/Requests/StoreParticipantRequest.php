<?php

namespace App\Http\Requests;

use App\Rules\AddParticipantsRule;
use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $game=\request()->route('game');
        return [
            'email'=>[new AddParticipantsRule($game)]
        ];
    }
}
