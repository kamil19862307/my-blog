<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
            'title' => ['required', 'max:100'],
            'slug' => ['required', 'unique:messages', 'max:255'],
            'content' => ['required'],
            'category_id' => ['required', 'exists:categories,id']
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute is empty!',
            'title.required' => ':attribute is required!'
        ];
    }
}
