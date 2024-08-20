<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
    public function rules(): array {
        return [
            'name' => "required|max:255",
            'category' => "required",
            'price' => "required|max:255",
            'wieght' => "required|max:255",
            'description' => "required|max:255",
            'photo' => 'image|mimes:jpg,jpeg,png|max:2048'
        ];
    }
}
