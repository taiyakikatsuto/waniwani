<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ResultRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'result') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'point' => ['required', 'integer'],
            'bitten' => ['required', 'integer'],
            'model_id' => ['required', 'integer'],
            'play_type' => ['required', 'integer'],
            'file_name' => [],
        ];

        if (!(Auth::check())) {
            $rules = array_merge($rules, [
                'name' => ['required', 'string', 'max:64', Rule::unique('users', 'name')],
                'pref' => ['required', 'integer'],
                'email' => ['required'],
                'password' => ['required', 'confirmed', 'string', 'min:6', 'max:30',
                                'regex:/^[a-zA-Z0-9\/*\-+.,!#$%&\(\)~\|_]+$/'],
                'password_confirmation' => ['required'],
                ]);
        }

        return $rules;
    }
}
