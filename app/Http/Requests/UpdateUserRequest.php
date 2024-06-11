<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'password' => 'required|min:3|max:50',
            'phone_number' => 'required|min:11|max:20',
            'status' => 'required',
            'gender' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'رمز عبور را وارد کنید',
            'password.min' => 'رمز نمی تواند کوچکتر از ۸ کارکتر باشد',
            'password.max' => 'رمزعبور نمی تواند بیشتر از ۱۰ کارکتر باشد',
            'phone_number' => 'شماره همراه اشتباه است',
            'status' => 'لطفا یکی را انتخاب کنید(عادی,ویژه)',
            'gender' => 'لطفا یکی را انتخاب کنید(آقا,خانم)'

        ];
    }
}
