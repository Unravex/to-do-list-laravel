<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'unique:users,name', 'min:3', 'max:20'],
            'email' => ['required', 'email', 'unique:users,email', 'min:5', 'max:30'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
        ];
    }

    public function messages(): array 
    {
        return [
            'name.required' => 'Имя пользователя обязательно для заполнения',
            'name.string' => 'Имя пользователя должно быть строковым значением',
            'name.unique' => 'Это имя пользователя уже занято',
            'name.min' => 'Имя пользователя должно содержать минимум 3 символа',
            'name.max' => 'Имя пользователя не должно превышать 20 символов',
            
            'email.required' => 'Email обязателен для заполнения',
            'email.email' => 'Укажите правильный email',
            'email.unique' => 'Этот email уже зарегистрирован',
            'email.min' => 'Email должен содержать минимум 5 символов',
            'email.max' => 'Email не должен превышать 30 символов',
            
            'password.required' => 'Пароль обязателен для заполнения',
            'password.confirmed' => 'Введённые пароли не совпадают',
            'password.min' => 'Пароль должен содержать минимум 7 символов',
            'password.max' => 'Пароль не должен превышать 50 символов',
        ];
    }
}
