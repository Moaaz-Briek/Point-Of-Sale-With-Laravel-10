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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|regex:/^[a-z0-9]+$/',
            'password' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
          'username.required' => 'اسم المستخدم مطلوب',
          'username.regex' => 'اسم المستخدم لا يجب أن يحتوى على [!@#$%^&*()<>]',
          'password.required' => 'الرقم السرى مطلوب',
        ];
    }
}
