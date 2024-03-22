<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:4|max:10',
            'auther'=>'required',
            'content'=> 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'=> 'عنوان الزامی است',
            'title.min'=> 'عنوان باید حداقل ۴ حرف باشد',
            'title.max'=> 'عنوان نمی تواند بیش از ۱۰ خرف باشد',
            'auther'=> 'نام نویسنده وارد نشده است',
            'content'=> 'محتوا را وارد کنید'
        ];
    }
}
