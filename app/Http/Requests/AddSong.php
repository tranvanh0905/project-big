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
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'genres_id' => 'required',
            'artist_id' => 'required',
            'song_url' => 'required|mimes:mp3,wav',
            'name' => 'required',
            'lyric' => 'required',
            'created_at' => 'required',
            'artist_song' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Vui lòng chọn ảnh cho bài hát',
            'image.mimes' => "Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png",
            'image.max' => 'Ảnh giới hạn dung lượng không quá 2M',
            'genres_id.required' => 'Vui lòng chọn thể loại bài hát',
            'artist_song.required' => 'Vui lòng chọn người thể hiện',
            'song_url.required' => 'Vui lòng chọn bài hát',
            'song_url.mimes' => 'Chỉ chấp nhận nhạc với đuôi .mp3 .wav',
            'name.required' => 'Vui lòng điền tên bài hát',
            'lyric.required' => 'Vui lòng điền lời bài hát',
            'created_at.required' => 'Vui lòng chọn ngày phát hành',
        ];
    }
}
