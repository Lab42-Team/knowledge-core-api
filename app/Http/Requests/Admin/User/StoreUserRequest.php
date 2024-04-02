<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:users,name',
            'password' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255|unique:users,email',
            //'email_verified_at',   nullable
            //'remember_token',     nullable
            'role' => 'required|integer',
            'status' => 'required|integer',
            'full_name' => 'string|max:255|nullable',
            //'last_login_date' => 'required|string|max:255',
            //'login_ip' => 'required|string|max:255',
        ];
    }

    /**
     * Изменение сообщений об ошибках для определенных правил валидации.
     *
     * @return string[]
     */
    public function messages()
    {
        return [
            'name.required' => __('user.USER_ERROR_MESSAGE.NAME_REQUIRED'),
            'name.unique' => __('user.USER_ERROR_MESSAGE.NAME_UNIQUE'),
            'email.required' => __('user.USER_ERROR_MESSAGE.EMAIL_REQUIRED'),
            'email.email' => __('user.USER_ERROR_MESSAGE.EMAIL_EMAIL'),
            'email.unique' => __('user.USER_ERROR_MESSAGE.EMAIL_UNIQUE'),
        ];
    }
}
