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
            'name'=> 'required', 'max:50',
            'email'=> 'required','email',
            'password' => 'required','strings','min:8',
            'password_confirm' => 'required',
            'facebook' =>'url',
            'youtube' => 'url',
        ];
    }

    public function messages()
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

}
