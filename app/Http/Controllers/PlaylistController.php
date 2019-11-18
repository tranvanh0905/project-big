<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPlaylistForm;
use App\Playlist;
use App\PlaylistDetail;
use App\Song;

class PlaylistController extends Controller
{

    public function index()
    {
        $playlists = Playlist::paginate(20);
        return view('admin.playlists.index', compact('playlists'));
    }

    public function add()
    {
        $song = Song::all();
        return view('admin.playlists.add', compact('song'));
    }

    public function update()
    {
        return view('admin.playlists.edit');
    }

    public function actionAdd(AddPlaylistForm $request)
    {
        $model = new Playlist;
        $model->upload_by_user_id = 0;
        $model->fill($request->all());
        if ($request->hasFile('cover_image')) {
            // lấy tên gốc của ảnh
            $filename = $request->cover_image->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('cover_image')->storeAs('upload/image', $filename);
            $request->file('cover_image')->move('upload/image', $filename);
            $model->cover_image = "$path";
        }
        if ($model->save()) {
            foreach ($request['song_playlist'] as $list) {
                $playlistDetail = new PlaylistDetail;
                $playlistDetail->playlist_id = $model->id;
                $playlistDetail->song_id = $list;
                $playlistDetail->save();
            }
            return redirect()->route('playlist.home');
        };
        return redirect()->route('playlist.home');
    }
}
