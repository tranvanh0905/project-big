<?php

namespace App\Http\Controllers;

use App\ArtistSong;
use App\Genres;
use App\Http\Requests\AddSong;
use App\Song;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongsController extends Controller
{
    public function index()
    {
        return view('admin.songs.index');
    }

    public function add()
    {
        $genres = Genres::all();
        return view('admin.songs.add', compact('genres'));
    }

    public function update()
    {
        return view('admin.songs.edit');
    }

    public function actionAdd(AddSong $request)
    {
        $model = new Song();
        $model->fill($request->all());
        $model->status = 0;
        $model->view = 0;
        if ($request->hasFile('image')) {
            // lấy tên gốc của ảnh
            $filename = $request->image->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('image')->storeAs('upload/image', $filename);
            $request->file('image')->move('upload/image', $filename);
            $model->image = "$path";
        }
        if ($request->hasFile('song_url')) {
            // lấy tên gốc của ảnh
            $filename = $request->song_url->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('song_url')->storeAs('upload/mp3', $filename);
            $request->file('song_url')->move('upload/mp3', $filename);
            $model->song_url = "$path";
        }
        DB::beginTransaction();
        try {
            $model->save();
            foreach ($request->post('artist_song') as $key => $value) {
                $model_artist_song = new ArtistSong();
                $model_artist_song->song_id = $model->id;
                $model_artist_song->artist_id = $value;
                $model_artist_song->save();
            }
            DB::commit();
        } catch (Exception $ex) {
            // ghi log lỗi lại
            DB::rollback();
        }
    }
}
