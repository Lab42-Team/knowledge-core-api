<?php

namespace App\Http\Requests\Admin\News;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'string|nullable',
            'status' => 'required|integer',
            'date' => 'required|date',
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
            'name.required' => __('news.NEWS_ERROR_MESSAGE.NAME'),
            'date.required' => __('news.NEWS_ERROR_MESSAGE.DATE_REQUIRED'),
            'date.date' => __('news.NEWS_ERROR_MESSAGE.DATE_DATE'),
        ];
    }
}
