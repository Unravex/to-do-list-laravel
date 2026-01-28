<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'task_name' => ['required', 'string', 'min:3', 'max:50'],
            'task_description' => ['required', 'string', 'min:5', 'max:255'],
        ];
    }

    public function messages(): array 
    {
        return [
            'task_name.required' => 'Наименование задачи должно быть заполнено',
            'task_name.string' => 'Наименование задачи должно быть строковым значением',
            'task_name.min' => 'Наименование задачи должно содержать минимум 3 символа',
            'task_name.max' => 'Наименование задачи должно содержать максимум 50 символов',

            'task_description.required' => 'Описание задачи должно быть заполнено',
            'task_description.string' => 'Описание задачи должно быть строковым значением',
            'task_description.min' => 'Описание задачи должно содержать минимум 5 символов',
            'task_description.max' => 'Описание задачи должно содержать максимум 255 символов',
        ];
    }
}
