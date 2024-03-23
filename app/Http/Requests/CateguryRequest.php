<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateguryRequest extends FormRequest
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
            'title'=>'required|min:3|max:12'
        ];
    }
    public function messages(): array{
        return [
            'title.required'=> 'عنوان دسته بندی را وارد کنید',
            'title.min'=> 'عنوان نمی تواند کمتر از ۳ حرف باشد',
            'title.max'=> 'عنوان دسته بندی نمی تواند بیش از ۱۰ حرف باشد'
        ];
    }
}
