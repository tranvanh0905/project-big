<?php

namespace App\Http\Controllers;

use App\WebSettings;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{
    //
    public function actionIndex()
    {
        $webSettings = WebSettings::all();
        return view('admin.login');

    }
}
