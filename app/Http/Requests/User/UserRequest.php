<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class UserRequest extends FormRequest {
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=> 'required', 'min:2','regex:/^[a-zA-Z]+$/u',
            'email'=> 'required','email',
            'password' => 'required','strings','min:8','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/','required_with:password_confirm','same:password_confirm',
            'password_confirm' => 'required',
            'facebook' =>'url',
            'youtube' => 'url',
        ];
    }

/*    public function messages()
    {
        return[
            'name.required' => 'Buộc phải nhập'
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'Tên người dùng'
        ];
    }
*/
}
