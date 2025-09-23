<?php

namespace App\Http\Requests\KnowledgeCore;

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
            'email' => "string|nullable|email:rfc|max:255|unique:knowledge_core,email, {$this->knowledge_core->id}",
            'address' => 'string|nullable|max:255',
            'references' => "string|nullable|unique:knowledge_core,references, {$this->knowledge_core->id}",
            'lab_link' => "string|nullable|unique:knowledge_core,lab_link, {$this->knowledge_core->id}",
            'github_link' => "string|nullable|unique:knowledge_core,github_link, {$this->knowledge_core->id}",
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
