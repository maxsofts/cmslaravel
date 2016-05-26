<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required',

            'author'=>'required',
            'category'=>'required',
            'tags'=>'required',
            'status'=>'required',
            
        ];
    }
    public function messages()
    {
        return [

            'title.required'=>'không để trống mục này',
            'author.required'=>' không được để trống !!!',
            'category.required'=>'không để trống mục này',
            'tags.required'=>'không để trống mục này',
            'status.required'=>'không để trống mục này',

            //'ConfirmPassword.required'=>'Mời bạn xác nhận lại mật khẩu'
        ];
    }
}
