<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function loginForm()
    {
        return view('client.login');
    }

    public function adminLoginForm()
    {
        return view('admin.home');
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect(route('client.home'));
        }

        return view('client.login');
    }

    public function loginAdmin(LoginAdminRequest $request)
    {
        var_dump($request);
        die;
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
            'level' => 1,
            'status' => 1
        ];
        if (Auth::attempt($login)) {
            return redirect('admincp');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
