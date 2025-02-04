<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends ApiRequest
{
    //Правило аунт/авториз
    public function authorize(): bool
    {
        return true;
    }

    // Правила валидации
    public function rules(): array
    {
        return [
            'surname' => 'required|string|max:64',
            'name' => 'required|string|max:64',
            'patronymic' => 'nullable|string|max:64',
            'sex'=> 'required|boolean',
            'birthday' => 'required|date:yyyy-mm-dd',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|max:255|min:6',
        ];
    }
    // Кастомные смс об ощибках валидации
    public function messages(): array{
        return [
            'surname.required' => 'Фамилия обязательное поле',
            'name.required' => 'Имя обязательное поле',
            'sex.required' => 'Пол обязательное поле',
            'birthday.required' => 'Дата обязательное поле',
            'email.required' => 'ЕПочта обязательное поле',
            'password.required' => 'Пароль обязательное поле',

            'surname.max' => 'Максимум 64 символа',
            'name.max' => 'Максимум 64 символа',
            'patronymic.max' => 'Максимум 64 символа',
            'email.max' => 'Максимум 255 символа',
            'password.max' => 'Максимум 255 символа',
            'password.min' => 'Минимум 6 символов',

            'birthday.date' => 'Дата должна быть вот в формате: ГГГГ-ММ-ДД'
        ];
    }
}
