<?php

namespace App\Http\Controllers;

use App\Http\Resources\Song as SongResource;
use App\Http\Resources\UserPlaylist;
use App\Model_client\Album;
use App\Model_client\Playlist;
use App\Model_client\PlaylistDetail;
use App\Model_client\Song;
use App\Model_client\UserLikedAlbum;
use App\Model_client\UserLikedPlaylist;
use App\Model_client\UserLikedSong;
use Illuminate\Support\Facades\Auth;

class ClientPlayerController extends Controller
{
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

    //Like song

    public function checkLikeSong($songId)
    {
        $song = UserLikedSong::where('user_id', '=', Auth::id())->where('song_id', '=', $songId)->get();

        if (count($song) == 0) {
            return response()->json(array('msg' => 'dontLike'), 200);
        } else {
            return response()->json(array('msg' => 'liked'), 200);
        }
    }

    public function likeSong($id)
    {
        $likeSong = new UserLikedSong();

        $checkSongLiked = UserLikedSong::where('song_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get();

        if (count($checkSongLiked) != 1) {
            Song::where('id', '=', $id)->increment('like');;
            $likeSong->user_id = Auth::user()->id;
            $likeSong->song_id = $id;
            $likeSong->save();
            return response()->json(array('msg' => 'liked'), 200);
        } else {
            Song::where('id', '=', $id)->decrement('like');
            UserLikedSong::where('song_id', '=', $id)->where('user_id', '=', Auth::user()->id)->delete();
            return response()->json(array('msg' => 'dislike'), 200);
        }
    }

    //Like album

    public function checkLikeAlbum($albumId)
    {
        $song = UserLikedAlbum::where('user_id', '=', Auth::id())->where('album_id', '=', $albumId)->get();

        if (count($albumId) == 0) {
            return response()->json(array('msg' => 'dontLike'), 200);
        } else {
            return response()->json(array('msg' => 'liked'), 200);
        }
    }

    public function likeALbum($id)
    {
        $likeAlbum = new UserLikedAlbum();

        $checkAlbumLiked = UserLikedAlbum::where('album_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get();

        if (count($checkAlbumLiked) != 1) {
            Album::where('id', '=', $id)->increment('like');;
            $likeAlbum->user_id = Auth::user()->id;
            $likeAlbum->album_id = $id;
            $likeAlbum->save();
            return response()->json(array('msg' => 'album liked'), 200);
        } else {
            Album::where('id', '=', $id)->decrement('like');
            UserLikedAlbum::where('album_id', '=', $id)->where('user_id', '=', Auth::user()->id)->delete();
            return response()->json(array('msg' => 'album dislike'), 200);
        }
    }

    //Like playlist

    public function checkLikePlaylist($playlistId)
    {
        $song = UserLikedPlaylist::where('user_id', '=', Auth::id())->where('playlist_id', '=', $playlistId)->get();

        if (count($playlistId) == 0) {
            return response()->json(array('msg' => 'dontLike'), 200);
        } else {
            return response()->json(array('msg' => 'liked'), 200);
        }
    }

    public function likePlaylist($id)
    {
        $likePlaylist = new UserLikedPlaylist();

        $checkPlaylistLiked = UserLikedPlaylist::where('playlist_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get();

        if (count($checkPlaylistLiked) != 1) {
            Playlist::where('id', '=', $id)->increment('like');;
            $likePlaylist->user_id = Auth::user()->id;
            $likePlaylist->playlist_id = $id;
            $likePlaylist->save();
            return response()->json(array('msg' => 'playlist liked'), 200);
        } else {
            Playlist::where('id', '=', $id)->decrement('like');
            UserLikedPlaylist::where('playlist_id', '=', $id)->where('user_id', '=', Auth::user()->id)->delete();
            return response()->json(array('msg' => 'playlist dislike'), 200);
        }
    }

    //Get user playlist

    public function getUserPlaylist(){
        $userPlaylist = Playlist::where('upload_by_user_id', '=', Auth::id())->get();

        $data = $userPlaylist;
        return UserPlaylist::collection($data);
    }

    //Add song to playlist

    public function addSongToPlaylist($songid, $playlistid){

        $playlistDetail = new PlaylistDetail();

        $checkSongInPlaylist = PlaylistDetail::where('song_id', '=', $songid)->where('playlist_id', '=', $playlistid)->get();

        if (count($checkSongInPlaylist) != 1) {
            $playlistDetail->song_id = $songid;
            $playlistDetail->playlist_id = $playlistid;
            $playlistDetail->save();
            return response()->json(array('msg' => 'Đã thêm bài hát vào danh sách phát'), 200);
        }else{
            return response()->json(array('msg' => 'Bài hát đã có trong danh sách phát này'), 200);
        }

    }

    //Edit user playlist

    public function libraryUserPlaylistEdit($playlistId){

        return view('client.library-user-playlist-edit');

    }
}
