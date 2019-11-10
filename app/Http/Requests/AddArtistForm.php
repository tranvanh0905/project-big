<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddArtistForm extends FormRequest
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
            'name' => 'required',
            'full_name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
            'style' => 'required',
            'about' => 'required',
            'birthday' => 'required',
            'countries_id' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Vui lòng nhập tên ca sỹ",
            'full_name.required' => "Vui lòng nhập đầy đủ họ và tên",
            'image.required' => "Vui lòng chọn ảnh",
            'image.mimes' => "Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif",
            'image.max' => 'Ảnh giới hạn dung lượng không quá 2M',
            'style.required' => "Vui lòng nhập thể loại của ca sỹ",
            'about.required' => "Vui lòng nhập giới thiệu ca sỹ",
            'birthday.required' => "Vui lòng nhập ngày sinh ca sỹ",
            'countries_id.required' => "Vui lòng chọn quốc gia",
            'status.required' => "Vui lòng chọn trạng thái",
        ];
    }
}
