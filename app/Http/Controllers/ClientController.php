<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Genres;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EditProfileRequest;
use App\Playlist;
use App\PlaylistDetail;
use App\Song;
use App\User;
use App\UserLikedSong;
use App\Http\Resources\Song as SongResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;

class ClientController extends Controller
{
    //-------------------------------------------//

    //Index page controller

    public function index()
    {

        $randomSong = Song::select('songs.*', 'users.id as user_id', 'users.role')->join('users', 'songs.upload_by_user_id', '=', 'users.id')
            ->where('users.role', '>', 400)
            ->inRandomOrder()
            ->limit(25)->with('artists')
            ->get();

        $latestSongs = Song::select('songs.*', 'users.id as user_id', 'users.role')->join('users', 'songs.upload_by_user_id', '=', 'users.id')
            ->where('users.role', '>', 400)
            ->orderBy('release_date', 'desc')
            ->limit(25)->with('artists')
            ->get();



        $mostViewAlbum = Album::orderBy('like', 'desc')->first();

        $allGenres = Genres::latest('id')->limit(15)->get();

        $latestAbums = Album::latest('release_date')->limit(20)->get();

        $playLists = Playlist::select('playlists.*', 'users.id as user_id', 'users.role')
            ->join('users', 'playlists.upload_by_user_id', '=', 'users.id')
            ->where('users.role', '>', 400)->orderBy('id', 'desc')->limit(4)
            ->get();

        $playLists->each(function ($q) {
            $q->load('getThreeSongs');
        });

        $artists = Artist::orderBy('follow', 'desc')->get();



        return view('client.index', compact('latestSongs', 'allGenres', 'latestAbums', 'randomSong', 'mostViewAlbum', 'playLists', 'artists'));
    }

    //Brower page
    public function brower()
    {
        $allSong = Song::select('songs.*', 'users.id as user_id', 'users.role')->join('users', 'songs.upload_by_user_id', '=', 'users.id')
            ->where('users.role', '>', 400)
            ->limit(25)->with('artists')
            ->get();

        $allAlbum = Album::limit(25)->get();

        $allPlaylist = Playlist::select('playlists.*', 'users.id as user_id', 'users.role')
            ->join('users', 'playlists.upload_by_user_id', '=', 'users.id')
            ->where('users.role', '>', 400)->orderBy('id', 'desc')->limit(20)
            ->get();

        return view('client.brower', compact('allSong', 'allAlbum', 'allPlaylist'));
    }

    //Genres page
    public function genres()
    {
        $allGenres = Genres::latest('id')->paginate(18);

        return view('client.all-genres', compact('allGenres'));
    }

    //Chart song page
    public function chart()
    {

        return view('client.chart');
    }

    //Chart song page
    public function chartSong()
    {

        $top50song = User::where('role', '>', 100)->with(['songs' => function ($query) {
            $query->orderBy('view', 'desc')->limit(50);
        }])->get()->pluck('songs')->flatten();

        $allGenres = Genres::inRandomOrder('id')->limit(10)->get();

        return view('client.chart-song', compact('top50song', 'allGenres'));
    }

    //Chart album page
    public function chartAlbum()
    {

        $top50album = Album::orderBy('like', 'desc')->get();

        $allGenres = Genres::inRandomOrder('id')->limit(10)->get();

        return view('client.chart-album', compact('top50album', 'allGenres'));
    }

    //All song page

    public function all($type)
    {
        if ($type == 'albums') {
            $allAlbum = Album::orderBy('release_date', 'desc')->with('artist')->get();

            return view('client.all', compact('allAlbum', 'type'));
        }else if ($type == 'playlists') {
            $allPlaylist = Playlist::orderBy('id', 'desc')->with('songs')->get();

            return view('client.all', compact('allPlaylist', 'type'));
        }else if ($type == 'songs'){

            $allSong = Song::orderBy('release_date', 'desc')->with('artists')->get();

            return view('client.all', compact('allSong', 'type'));
        }

        return redirect(route('client.home'));

    }


    //-------------------------------------------//

    //User page controller

    public function userIndex()
    {
        return view('client.account');
    }

    public function library()
    {

        $likedSong = Song::whereHas('userLikedSongs',function ($query){
            $query->where('users.id', '=', Auth::user()->id);
        })->get();

        $likedPlaylist = Playlist::whereHas('userLikedPlaylists',function ($query){
            $query->where('users.id', '=', Auth::user()->id);
        })->with('songs')->get();


        $likedAlbum = Album::whereHas('userLikedAlbums',function ($query){
            $query->where('users.id', '=', Auth::user()->id);
        })->with('artist')->get();


        $followArtist = Artist::whereHas('userFollows',function ($query){
            $query->where('users.id', '=', Auth::user()->id);
        })->get();


        return view('client.library', compact('likedSong', 'likedPlaylist', 'likedAlbum', 'followArtist'));
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

    public function likeSong($id){
        $likeSong = new UserLikedSong();
        $checkSongLiked = UserLikedSong::where('song_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get();

        if (count($checkSongLiked) != 1) {
            $likeSong->user_id = Auth::user()->id;
            $likeSong->song_id = $id;
            $likeSong->save();
        }


        return response()->json(array('msg' => '+1 like song'), 200);
    }

    //-------------------------------------------//

    //Song detail page

    public function singleSong($songId)
    {

        $singleSong = Song::find($songId)->load('artists');

        $relatedSong = Song::where('genres_id', '=', $singleSong->genres_id);

        $genres = Genres::latest('id')->limit(10)->get();

        $artists = Artist::orderBy('follow')->limit(10)->get();

        $mostLikeSong = Song::orderBy('like')->limit(10)->with('artists')->get();


        return view('client.single-song', compact('singleSong', 'relatedSong', 'genres', 'artists', 'mostLikeSong'));
    }

    //Album detail page

    public function singleAlbum($albumId)
    {

        $singleAlbum = Album::find($albumId);

        $songOfAlbum = Song::where('album_id', '=', $albumId)->get();

        $relateAlbum = Album::where('artist_id', '=', $singleAlbum->artist_id)->where('id', '<>', $singleAlbum->id)->get();

        return view('client.single-album', compact('singleAlbum', 'songOfAlbum', 'relateAlbum'));
    }

    //Playlist detail page

    public function singlePlaylist($playlistId)
    {

        $singlePlaylist = Playlist::find($playlistId)->load('songs');

        $relatedPlaylist = Playlist::all()->load('songs');

        return view('client.single-playlist', compact('singlePlaylist', 'relatedPlaylist'));
    }

    //Genres detail page

    public function singleGenres($genresId)
    {
        $genres = Genres::find($genresId);

        $latestSong = Song::latest('release_date')->where('genres_id', '=', $genresId)->limit(20)->get();

        $songOfGenres = Song::where('genres_id', '=', $genresId)->get();

        return view('client.single-genres', compact('genres', 'latestSong', 'songOfGenres'));
    }

    //Artist detail page

    public function singleArtist($artistId){
        $singleArtist = Artist::find($artistId)->load('songs.artists', 'albums');


        return view('client.single-artist', compact('singleArtist'));
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
        $songs = Playlist::find($playlistId)->load('songs');


        if ($songs == null) {
            return response()->json(array('msg' => 'Khong co bai hat'), 404);
        } else {
            $data = $songs->songs;
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
