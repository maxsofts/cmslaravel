<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name'=>'required|unique:users,name',

            'email'=>'required',
            'password'=>'required',
            'confirmPassword'=>'required',
            

        ];
    }

    public function messages()
    {
        return [

            'name.unique'=>'Tên đăng nhập đã tồn tại!',
            'name.required'=>"User  không được để trống !!!",
            'email.required'=>'Email không được để trống !!!',
            'password.required'=>"Password không được để trống",
            //'ConfirmPassword.required'=>'Mời bạn xác nhận lại mật khẩu'
        ];
    }

}
