<?php

namespace App\Http\Controllers;

use App\Album;
use App\Genres;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EditProfileRequest;
use App\PlaylistDetail;
use App\Song;
use App\User;
use App\UserLikedSong;
use App\Http\Resources\Song as SongResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{

    //-------------------------------------------//

    //Index page controller

    public function index()
    {
        $latestSongs = Song::join('user', 'user.id', '=', 'songs.upload_by_user_id')->latest('release_date')->where('user.role', '>', 100)->limit(25)->get();
        $allGenres = Genres::latest('id')->limit(15)->get();
        $latestAbums = Album::latest('id')->limit(15)->get();
        $randomSong = Song::join('user', 'user.id', '=', 'songs.upload_by_user_id')->where('user.role', '>', 100)->inRandomOrder()->limit(20)->get();
        $mostViewAlbum = Album::orderBy('views', 'desc')->first();

        return view('client.index', compact('latestSongs', 'allGenres', 'latestAbums', 'randomSong', 'mostViewAlbum'));
    }

    //Brower page
    public function brower()
    {
        $allSong = User::where('role', '>', 100)->with(['songs' => function ($query) {
            $query->limit(25);
        }])->get()->pluck('songs')->flatten();

        $allAlbum = Album::limit(25)->get();

        $allPlaylist = User::where('role', '>', 100)->with(['playlists' => function ($query) {
            $query->limit(25);
        }])->get()->pluck('playlists')->flatten();

        return view('client.brower', compact('allSong', 'allAlbum', 'allPlaylist'));
    }

    //Genres page
    public function genres()
    {
        $allGenres = Genres::latest('id')->paginate(18);

        return view('client.all-genres', compact('allGenres'));
    }

    //Chart song page
    public function chart(){

        return view('client.chart');
    }

    //Chart song page
    public function chartSong(){

        $top50song = User::where('role', '>', 100)->with(['songs' => function ($query) {
            $query->orderBy('views', 'desc')->limit(50);
        }])->get()->pluck('songs')->flatten();

        $allGenres = Genres::inRandomOrder('id')->limit(10)->get();

        return view('client.chart-song', compact('top50song', 'allGenres'));
    }

    //Chart album page
    public function chartAlbum(){

        $top50album = Album::orderBy('views', 'desc')->get();

        $allGenres = Genres::inRandomOrder('id')->limit(10)->get();

        return view('client.chart-album', compact('top50album', 'allGenres'));
    }


    //-------------------------------------------//

    //User page controller

    public function userIndex()
    {
        return view('client.account');
    }

    public function library()
    {
        $model = new UserLikedSong();
        $likedSong = $model->where('user_id', '=', Auth::user()->id)->get();


        return view('client.library', compact('likedSong'));
    }

    public function upload()
    {
        return view('client.upload');
    }

    public function editAccount()
    {
        return view('client.edit-account');
    }

    public function saveEditAccount(EditProfileRequest $request)
    {
        $model = new User();
        $user = $model->find(Auth::user()->id);

        $user->fill($request->all());
        $user->save();

        return redirect(route('user-edit-profile'))->with('status', 'Chỉnh sửa hồ sơ thành công!');
    }

    public function upgrade()
    {
        return view('client.upgrade-account');
    }

    public function changePassword()
    {
        return view('client.change-password');
    }

    public function saveChangePassword(ChangePasswordRequest $request)
    {

        User::find(Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect(route('user-change-password'))->with('status', 'Đổi mật khẩu thành công!');

    }

    public function userInvoice()
    {
        return view('client.invoice');
    }




    //-------------------------------------------//

    //Song detail page

    public function singleSong($songId)
    {

        $singleSong = Song::find($songId);

        return view('client.single-song', compact('singleSong'));
    }

    //Album detail page

    public function singleAlbum($albumId)
    {

        $singleAlbum = Album::find($albumId);
        $songOfAlbum = Song::where('album_id', '=', $albumId)->get();
        $relateAlbum = Album::where('artist_id', '=', $singleAlbum->artist_id)->where('id', '<>', $singleAlbum->id)->get();
        return view('client.single-album', compact('singleAlbum', 'songOfAlbum', 'relateAlbum'));
    }

    //Genres detail page

    public function singleGenres($genresId)
    {
        $genres = Genres::find($genresId);

        $latestSong = Song::latest('release_date')->where('genres_id', '=', $genresId)->limit(20)->get();

        $songOfGenres = Song::where('genres_id', '=', $genresId)->get();

        return view('client.single-genres', compact('genres', 'latestSong', 'songOfGenres'));
    }


    //-------------------------------------------//

    //Player controller

    public function getSong($songId)
    {
        $modelSong = new Song();
        $song = $modelSong->where('id', '=', $songId)->get();

        if ($song == null) {
            return response()->json(array('msg' => 'Khong co bai hat'), 404);
        } else {
            $data = $song;
            return SongResource::collection($data);
        }

    }

    public function getSongOfAlbum($albumId)
    {
        $modelSong = new Song();
        $songs = $modelSong->where('album_id', '=', $albumId)->get();

        if ($songs == null) {
            return response()->json(array('msg' => 'Khong co bai hat'), 404);
        } else {
            $data = $songs;
            return SongResource::collection($data);
        }
    }

    public function getSongOfPlaylist($playlistId)
    {
        $songs = PlaylistDetail::where('playlist_id', '=', $playlistId)->with('song')->get()->pluck('song')->flatten();

        dd($songs);

        if ($songs == null) {
            return response()->json(array('msg' => 'Khong co bai hat'), 404);
        } else {
            $data = $songs;
            return SongResource::collection($data);
        }
    }

    public function updateView($songId)
    {
        $modelSong = new Song();
        $song = $modelSong->find($songId);

        if ($song == null) {
            return response()->json(array('msg' => 'Khong co bai hat'), 404);
        } else {
            $modelSong->where('id', $songId)->increment('view', 1);

            return response()->json(array('msg' => '+1 view'), 200);
        }
    }

}
