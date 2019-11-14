<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditArtistForm extends FormRequest
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
            'nickname' => 'required',
            'full_name' => 'required',
            'about' => 'required',
            'birthday' => 'required',
            'countries_id' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nickname.required' => "Vui lòng nhập tên ca sĩ",
            'full_name.required' => "Vui lòng nhập đầy đủ họ và tên",
            'about.required' => "Vui lòng nhập giới thiệu ca sĩ",
            'birthday.required' => "Vui lòng nhập ngày sinh ca sĩ",
            'countries_id.required' => "Vui lòng chọn quốc gia",
            'status.required' => "Vui lòng chọn trạng thái",
        ];
    }
}
