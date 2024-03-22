<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price' => 'required|min:5',
            'status' => 'required',
            'number' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'price.required' => 'لطفا قیمت محصول را مشخص کنید',
            'price.min'=>'قیمت محصول نمی تواند کمتر از 10000',
            'status'=> 'وضعیت کالا نامشخص است',
            'number'=> 'تعداد کالا رامشخص کنید'
        ];
    }
}
