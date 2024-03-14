<?php

namespace App\Http\Requests\Admin\KnowledgeCore;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateKnowledgeCoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => 'string|nullable',
            'phone' => 'string|nullable|max:255',
            'email' => 'string|nullable|email:rfc,dns|max:255|unique:App\Models\KnowledgeCore,email',
            'address' => 'string|nullable|max:255',
            'references' => 'string|nullable|unique:App\Models\KnowledgeCore,references',
            'lab_link' => 'string|nullable|unique:App\Models\KnowledgeCore,lab_link',
            'github_link' => 'string|nullable|unique:App\Models\KnowledgeCore,github_link',
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
            'email.email' => __('knowledge_core.KNOWLEDGE_CORE_ERROR_MESSAGE.EMAIL'),
            'email.unique' => __('knowledge_core.KNOWLEDGE_CORE_ERROR_MESSAGE.EMAIL_UNIQUE'),
            'references.unique' => __('knowledge_core.KNOWLEDGE_CORE_ERROR_MESSAGE.REFERENCES_UNIQUE'),
            'lab_link.unique' => __('knowledge_core.KNOWLEDGE_CORE_ERROR_MESSAGE.LAB_LINK_UNIQUE'),
            'github_link.unique' => __('knowledge_core.KNOWLEDGE_CORE_ERROR_MESSAGE.GITHUB_LINK_UNIQUE'),
        ];
    }
}
