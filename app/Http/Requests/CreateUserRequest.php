<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        ];
    }
    function messages()
    {
        return[
                'name.required'=>'Không được để trống ở đây',
                'name.min'=>'Trường này có ít nhất 5 ký tự ',
                'content.required'=>'Trường Này Không Đuợc Để Trống',
                'content.min'=>'Trường này có ít nhất 20 ký tự',
                'gmail.email'=>'Trường này không đúng định dạng',
        ];
    }
}
