<?php

namespace App\Http\Requests\Auth;

use App\Services\FilesService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
          return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'password' => ['confirmed'],
            'adress' => 'required|string|max:255',
            'countery' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'attachment' => 'image',
            'age' => 'required|numeric',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'privilege' => 'required'
        ];
    }
    public function getUpdatedFields(){
        $fields =  [
            'name' => $this->name,
            'email' => $this->email,
            'adress' => $this->adress,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'countery' => $this->countery,
            'age' => $this->age,
            'height' => $this->height,
            'weight' => $this->weight,
            'privilege' => $this->privilege
        ];
     
        if (isset($this->password)) {
            $fields['password'] = Hash::make($this->password);
        }
 

        if (isset($this->attachment)) {
            $fields['attachment'] = FilesService::storeFile($this);
        }
       
        return $fields;
    }
}
