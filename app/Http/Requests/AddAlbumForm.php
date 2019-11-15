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
            'title' => 'required',
            'description' => 'required',
            'cover_image' => 'required',
            'artist_id' => 'required',
            'release_date' => 'required',
            'person_song' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tên album',
            'description.required' => 'Vui lòng nhập mô tả',
            'cover_image.required' => 'Vui lòng chọn ảnh album',
            'artist_id.required' => 'Vui lòng chọn ca sĩ',
            'release_date.required' => 'Vui lòng chọn ngày phát hành',
            'person_song.required' => 'Vui lòng chọn bài hát',
        ];
    }
}
