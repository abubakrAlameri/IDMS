<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterUserRequest extends FormRequest
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
        // dd($this->all());

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'adress' => 'required|string|max:255',
            'countery' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'attachment' => 'required|image',
            'age' => 'required|numeric',
            'gender' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',

        ];
    }
}
