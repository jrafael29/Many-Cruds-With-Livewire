<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Insira um nome',
            'name.min' => 'O nome deve haver, no minimo, 5 caracteres',
            'email.required' => 'Insira um email',
            'email.email' => 'Insira um email válido',
            'email.unique' => 'Email já em uso',
            'password.required' => 'Insira uma senha',
            'password.confirmed' => 'As senhas nao correspondem',
        ];
    }
}
