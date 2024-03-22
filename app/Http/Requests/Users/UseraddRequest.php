<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Http\FormRequest;

class UseraddRequest extends FormRequest
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
            'password' => 'required|min:8',
            'phone_number' => 'required|min:11|max:20',
            'status' => 'required',
            'gender' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'password.required' => 'رمز عبور معتبر نمی باشد',
            'password.min' => 'رمز عبور باید حداقل ۸ کارکتر باشد',
            'phone_number.required' => 'شماره همراه معتبر نمی باشد',
            'phone_number.min' => 'شماره اشتباه است لطفا دقت کنید',
            'phone_number.max' => 'شماره اشتباه است لطفا دقت کنید',
            'status.required'=> '(عادی,ویژه)لطفا یکی را انتخاب کنید',
            'gender.required'=> '(آقا,خانم)لطفا یکی را انتخاب کنید',
        ];
    }
}
