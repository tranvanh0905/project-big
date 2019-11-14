<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Country;
use App\Http\Requests\AddArtistForm;
use App\Http\Requests\EditArtistForm;
use App\Song;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = Artist::paginate(20);

        return view('admin.artists.index', compact('artists'));
    }

    public function add()
    {
        $country = Country::all();
        return view('admin.artists.add', compact('country'));
    }

    public function actionAdd(AddArtistForm $request)
    {
        $model = new Artist();
        $model->fill($request->all());
        if ($request->hasFile('avatar')) {
            // lấy tên gốc của ảnh
            $filename = $request->avatar->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('avatar')->storeAs('upload/image', $filename);
            $request->file('avatar')->move('upload/image', $filename);
            $model->avatar = "$path";
        }
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
        $model->save();
        return redirect()->route('artists.home');
    }

    public function update($artist_id)
    {
        $model = Artist::find($artist_id);
        $country = Country::all();
        return view('admin.artists.edit', compact(['country', 'model']));
    }

    public function actionUpdate($artist_id, EditArtistForm $request)
    {
        $model = Artist::find($artist_id);
        $model->fill($request->all());
        if ($request->hasFile('avatar')) {
            // lấy tên gốc của ảnh
            $filename = $request->avatar->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('avatar')->storeAs('upload/image', $filename);
            $request->file('avatar')->move('upload/image', $filename);
            $model->avatar = "$path";
        }
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
        $model->save();
        return redirect()->route('artists.home');
    }
}
