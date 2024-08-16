<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class orderRequest extends FormRequest
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
            "name" => "required|max:20",
            "phone" => "required|max:9",
            "email" => "required|max:50|email",
            "adress" => "required|max:50",
            "city" => "required|max:50",
            "method" => "required",
        ];
    }

    // Кастомные ошибки
    public function messages() {
        return [
            "name.required" => "Introduceți numele dvs",
            "phone.required" => "Introduceți telefonul dvs",
            "email.required" => "Introduceți email dvs",
            "adress.required" => "Introduceți strada dvs",
            "city.required" => "Introduceți oraşul dvs",
            "method.required" => "Selectați metoda de plată",
            "name.max" => "Numele dvs trebuie să aibă maximum 20 de caractere",
            "phone.max" => "Numele dvs trebuie să aibă maximum 9 de caractere",
            "email.max" => "Numele dvs trebuie să aibă maximum 50 de caractere",
            "adress.max" => "Numele dvs trebuie să aibă maximum 50 de caractere",
            "city.max" => "Numele dvs trebuie să aibă maximum 50 de caractere",
            "email.email" => "Introduceți adresa de e-mail corectă"
        ];
    }
}
