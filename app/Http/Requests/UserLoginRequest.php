<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages(): array 
    {
        return [
            'name.required' => 'Имя пользователя обязательно для заполнения',
            'name.string' => 'Имя пользователя должно быть строковым значением',
            
            'password.required' => 'Пароль обязателен для заполнения',
        ];
    }
}
