<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        return [
            'name' => ['required', 'string', 'max:64', Rule::unique('users', 'name')],
            'email' => ['required'],
            'password' => ['required', 'confirmd', 'string', 'min:6', 'max:30',
                            'regex:/^[a-zA-Z0-9\/*\-+.,!#$%&\(\)~\|_]+$/'],
            'password_confirmation' => ['required'],
            'point' => ['required', 'integer'],
            'bitten' => ['required', 'integer'],
            'model_id' => ['required', 'integer'],
            'play_type' => ['required', 'integer'],
            'store_id' => ['required', 'integer'],
            'file' => [],
        ];
    }
}
