<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EditProfileRequest;
use App\Song;
use App\User;
use App\UserLikedSong;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //User client controller
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

    //Index page client controller

    public function index()
    {
        $latestsongs = Song::latest('id')->limit(25)->get();
        $allgenres = Genres::latest('id')->limit(15)->get();

        return view('client.index', compact('latestsongs', 'allgenres'));
    }


    public function getGenres($genresId)
    {
        $genres = Genres::find($genresId);

        $latestSong = Song::where('genres_id', '=', $genresId)->latest('id')->get();

        $songOfGenres = Song::where('genres_id', '=', $genresId)->get();

        return view('client.single-genres', compact('songOfGenres', 'genres', 'latestSong'));
    }


    //Player controller

    public function getSong($songId)
    {
        $modelSong = new Song();
        $song = $modelSong->find($songId);

        if ($song == null) {
            return response()->json(array('msg' => 'Khong co bai hat'), 404);
        } else {
            $data = $song;
            return response()->json($data, 200);
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
