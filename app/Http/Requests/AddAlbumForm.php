<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAlbumForm extends FormRequest
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
            'artist_id' => 'required',
            'song_id' => 'required',
            'name_album' => 'required',
            'content' => 'required',
            'cover_album' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }
    public function messages(){
        return [
            'artitst_id.required' => "Hãy chọn ca sỹ",
            'song_id.required'=>"Hãy chọn bài hát",
            'name_album.min' => "Vui lòng nhập tên album",
            'content.required' => "Vui lòng nhập nội dung album",
            'cover_album.required' => "Vui lòng chọn ảnh",
            'cover_album.mimes' => "Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif",
            'cover_album.max' => 'Ảnh giới hạn dung lượng không quá 2M',
        ];
    }
}
