<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            ],
            'full_name' => [
                'required',
            ],
            'avatar' => [
                'mimes:jpg,jpeg,png',
                'max:2048'
            ]
        ];

        return $validate;
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Không được để trống tên tài khoản !',
            'full_name.required' => 'Không được để trống họ và tên !',
            'avatar.mimes' => "Ảnh tải lên phải có định dạng .jpg .jpeg .png",
            'avatar.max' => 'Ảnh tải lên giới hạn dung lượng không quá 2M',
        ];
    }
}
