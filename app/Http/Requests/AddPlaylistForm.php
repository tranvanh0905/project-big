<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPlaylistForm extends FormRequest
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
            'playlist_name' => 'required',
            'song_id' => 'required',
            'status' => 'required',
            'created_by' => 'required',
        ];
    }
    public function messages(){
        return [
            'artitst_id.required' => "Hãy chọn ca sỹ",
            'playlist_name' => "Vui lòng nhập tên danh sách phát",
            'song_id.required'=>"Vui lòng chọn bài hát",
            'status.min' => "Vui lòng chọn trạng thái",
            'content.required' => "Vui lòng nhập nội dung",

        ];
    }
}
