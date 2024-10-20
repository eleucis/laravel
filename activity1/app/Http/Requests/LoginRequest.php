<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //
            'username' => ['required', 'min:6', 'email', 'ends_with:gmail.com'],
            'password' => ['required']
        ];
    }
    public function messages(){
        return[
            'username.required' => 'The Username field is required!',
            'username.email' => 'Username should only contain letters' 
        ];

    }
}
