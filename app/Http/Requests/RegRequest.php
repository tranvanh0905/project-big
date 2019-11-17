<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
        $validate = [
            'user_name' => [
                'required',
                'unique:users,user_name',
                'min:4',
                'max: 20'
            ],
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,10}$/',
            ]
        ];

        return $validate;
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Bạn phải nhập tên tài khoản !',
            'user_name.unique' => 'Tên tài khoản đã có người đặt, hãy thử đặt tên khác !',
            'user_name.min' => 'Tên tài khoản tối thiểu phải 4 kí tự!',
            'user_name.max' => 'Tên tài khoản tối đa phải 20 kí tự!',
            'email.required' => 'Bạn phải nhập email !',
            'email.unique' => 'Email đã có người đăng ký, hãy thử email khác !',
            'email.regex' => 'Định dạng email chưa chính xác !',
            'password.required' => 'Bạn phải nhập mật khẩu !',
            'password.regex' => 'Mật khẩu phải có ít nhất 8 kí tự, một chữ in hoa, một chữ số và một kí tự đặc biệt !',
        ];
    }
}
