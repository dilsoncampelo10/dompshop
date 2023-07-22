<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:100'],
            'description' => ['nullable'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'price.required' => 'Preço é obrigatório',
            'quantity.required' => 'Quantidade é obrigatório',
            'name.max' => 'Nome teve quantidade de caracteres excedido',
            'price.numeric' => 'Preço deve ser um número',
            'quantity.numeric' => 'Quantidade deve ser um número',
        ];
    }
}
