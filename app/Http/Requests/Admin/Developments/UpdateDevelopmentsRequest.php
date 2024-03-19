<?php

namespace App\Http\Requests\Admin\Developments;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDevelopmentsRequest extends FormRequest
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
            'year' => 'integer|between:1990,2050|nullable',
            'authors' => 'string|nullable',
            'publications' => 'string|nullable',
            'requirements' => 'string|nullable',
            'practical_application' => 'string|nullable',
            'version_history' => 'string|nullable',
            'demo_videos' => 'string|nullable',
            'software_link' => 'string|nullable|unique:App\Models\Developments,software_link',
            'documentation_link' => 'string|nullable|unique:App\Models\Developments,documentation_link',
            'github_link' => 'string|nullable|unique:App\Models\Developments,github_link',
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
            'name.required' => __('developments.DEVELOPMENTS_ERROR_MESSAGE.NAME_REQUIRED'),
            'year.date' => __('news.DEVELOPMENTS_ERROR_MESSAGE.YEAR_DATE'),
            'software_link.unique' => __('developments.DEVELOPMENTS_ERROR_MESSAGE.SOFTWARE_LINK_UNIQUE'),
            'documentation_link.unique' => __('developments.DEVELOPMENTS_ERROR_MESSAGE.DOCUMENTATION_LINK_UNIQUE'),
            'github_link.unique' => __('developments.DEVELOPMENTS_ERROR_MESSAGE.GITHUB_LINK_UNIQUE'),
        ];
    }
}
