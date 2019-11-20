<?php

namespace App\Http\Controllers;

use App\Artist;
use App\ArtistSong;
use App\ArtistSongDetail;
use App\Genres;
use App\Http\Requests\AddSong;
use App\Http\Requests\EditSong;
use App\PersonSong;
use App\Song;
use http\Env\Request;
use http\Env\Url;
use Illuminate\Support\Facades\DB;

class SongsController extends Controller
{
    public function index(\Illuminate\Http\Request $request)
    {
        $search = $request->get('search');
        $show_more = $request->get('show_more');
        if (!$request->has('search') && !$request->has('show_more') || empty($search) && empty($show_more)) {
            $songs = Song::paginate(20);
        } else if ($request->has('search') && !$request->has('show_more') || !empty($search) && empty($show_more)) {
            $songs = Song::where('name', 'like', "%$search%")
                ->paginate(20);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $songs->withPath(\Illuminate\Support\Facades\URL::current() . "?search=$search");
        } else if (!$request->has('search') && $request->has('show_more') || empty($search) && !empty($show_more)) {
            $songs = Song::paginate($show_more);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $songs->withPath(\Illuminate\Support\Facades\URL::current() . "?show-more=$show_more");
        } else {
            $songs = Song::where('name', 'like', "%$search%")
                ->paginate($show_more);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $songs->withPath(\Illuminate\Support\Facades\URL::current() . "?search=$search&&show-more=$show_more");
        }
        return view('admin.songs.index', compact('songs'));
    }

    public function add()
    {
        $genres = Genres::all();
        $artists = Artist::all();
        return view('admin.songs.add', compact(['genres', 'artists']));
    }

    public function update($song_id)
    {
        $song = Song::find($song_id);
        $genres = Genres::all();
        $artist_song_detail = ArtistSongDetail::where(['song_id' => $song_id])->get();
        $artists = Artist::all();
        return view('admin.songs.edit', compact(['song', 'genres', 'artists', 'artist_song_detail']));
    }

    public function search(\Illuminate\Http\Request $request)
    {
        $search = $request->get('search');
        $songs = Song::where('name', 'like', '%' . $search . '%')->paginate(5);
        return view('admin.songs.index', compact('songs'));
    }

    public function showMore(\Illuminate\Http\Request $request)
    {
        $show_more = $request->get('show_more');
        $songs = Song::paginate($show_more);
        return view('admin.songs.index', compact('songs'));
    }

    public function actionDelete($id)
    {
        $model = Song::find($id);
        if ($model !== null) {
            $model->delete();
            return redirect()->route('songs.home');
        } else {
            return redirect()->route('songs.home');
        }
    }

    public function actionUpdate(EditSong $request, $song_id)
    {
        $model = Song::find($song_id);
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
        if ($request->hasFile('mp3_url')) {
            // lấy tên gốc của ảnh
            $filename = $request->mp3_url->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('mp3_url')->storeAs('upload/mp3', $filename);
            $request->file('mp3_url')->move('upload/mp3', $filename);
            $model->mp3_url = "$path";
        }
        if ($model->save()) {
            foreach ($request->post('person_song') as $key => $value) {
                $artist_song_details_current = ArtistSongDetail::where('song_id', $model->id)->get();
                foreach ($artist_song_details_current as $list) {
                    $list->delete();
                }
                foreach ($request->post('person_song') as $key => $value) {
                    $model_artist_song = new ArtistSongDetail;
                    $model_artist_song->song_id = $model->id;
                    $model_artist_song->artist_id = $value;
                    $model_artist_song->save();
                }
            }
            return redirect()->route('songs.home');
        }
        return redirect()->route('songs.home');
    }

    public function actionAdd(AddSong $request)
    {
        $model = new Song();
        $model->fill($request->all());
        $model->view = 0;
        $model->upload_by_user_id = 0;
        $model->album_id = -1;
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
        if ($request->hasFile('mp3_url')) {
            // lấy tên gốc của ảnh
            $filename = $request->mp3_url->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('mp3_url')->storeAs('upload/mp3', $filename);
            $request->file('mp3_url')->move('upload/mp3', $filename);
            $model->mp3_url = "$path";
        }
        DB::beginTransaction();
        try {
            $model->save();
            foreach ($request->post('person_song') as $key => $value) {
                $model_artist_song = new ArtistSongDetail;
                $model_artist_song->song_id = $model->id;
                $model_artist_song->artist_id = $value;
                $model_artist_song->save();
            }
            DB::commit();
            return redirect()->route('songs.home');
        } catch (Exception $ex) {
            // ghi log lỗi lại
            DB::rollback();
        }
    }
}
