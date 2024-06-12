<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactorRequest extends FormRequest
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
            'order_id' => 'required|integer',
            'warranty_id' => 'required|integer',
            'total_price' => 'required|integer',
            'total_products' => 'required|integer',
        ];
    }
}
