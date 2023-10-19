<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name" => ['required', 'min:4', 'max:15'],
            "surname" => ['required', 'min:4', 'max:15'],
            "email" => ['required', 'email', 'max:255', 'unique:users'],
            "password" => ['required', 'min:6'],
            "birthdate" => ['required', 'date']
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Ad daxil edin.',
            'surname.required' => 'Soyad daxil edin.',
            'email.required' => 'Email daxil edin.',
            'password.required' => 'Şifrə daxil edin.',
            'birthdate.required' => 'Vaxt daxil edin.',
        ];
    }
}
