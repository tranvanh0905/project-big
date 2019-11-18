<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Http\Requests\AddAlbumForm;
use App\Http\Requests\AddArtistForm;
use App\Http\Requests\EditAlbum;
use App\Song;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::paginate(20);
        return view('admin.albums.index', compact('albums'));
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
                return redirect()->route('albums.home');
            }
        }
    }

    public function update($id)
    {
        $album = Album::find($id);
        $songs = Song::where('album_id', $id)->get();
        $all_song = Song::all();
        $artists = Artist::all();
        return view('admin.albums.edit', compact(['album', 'songs', 'artists', 'all_song']));
    }

    public function actionUpdate(EditAlbum $request, $album_id)
    {
        $model = Album::find($album_id);
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
                return redirect()->route('albums.home');
            }
        }
    }

    public function actionDelete($album_id)
    {
//        $model = Album::find($album_id);
//        $songs = Song::find()->where('album_id', $album_id);
//        foreach ($songs as $song) {
//            $song->album_id =
//        }
//        if ($model->delete()) {
//
//        };
    }

}
