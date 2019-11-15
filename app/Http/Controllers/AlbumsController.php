<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Http\Requests\AddAlbumForm;
use App\Http\Requests\AddArtistForm;
use App\Song;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        return view('admin.albums.index');
    }

    public function add()
    {
        $artists = Artist::all();
        return view('admin.albums.add', compact('artists'));
    }

    public function actionAdd(AddAlbumForm $request)
    {
        $model = new Album;
        $model->like = 0;
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
            if ($request['person_song'] !== null) {
                foreach ($request['person_song'] as $key => $value) {
                    $songs = Song::find($value);
                    $songs->album_id = $model->id;
                    $songs->save();
                }
                echo "success";
            }
        }
    }

    public function update()
    {
        return view('admin.albums.edit');
    }

}
