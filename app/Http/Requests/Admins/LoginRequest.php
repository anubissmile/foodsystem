<?php

namespace App\Http\Requests\Admins;

use App\Http\Requests\Request;

class LoginRequest extends Request
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
            'usr' => "required",
            'pwd' => "required"
        ];
    }

    public function messages(){
        return [
            'usr.required' => "Please fill your username in the blank!",
            'pwd.required' => "Please fill your password in the blank!"
        ];
    }
}
