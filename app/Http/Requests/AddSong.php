<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSong extends FormRequest
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
            //
            'image' => 'required',
            'genres_id' => 'required',
            'song_url' => 'required',
            'name' => 'required',
            'lyric' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Vui lòng chọn ảnh cho bài hát',
            'genres_id.required' => 'Vui lòng chọn thể loại bài hát',
            'song_url.required' => 'Vui lòng chọn bài hát',
            'name.required' => 'Vui lòng điền tên bài hát',
            'lyric.required' => 'Vui lòng điền lời bài hát',
        ];
    }
}
