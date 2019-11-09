<?php

namespace App\Http\Controllers;

use App\Genres;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongsController extends Controller
{
    public function index()
    {
        return view('admin.songs.index');
    }

    public function add()
    {
        return view('admin.songs.add');
    }

    public function update()
    {
        return view('admin.songs.edit');
    }

    public function actionAdd(Request $request)
    {
        $model = new Song();
        $model->fill($request->all());
        $model->image = "NULL";
        $model->status = 0;
        $current_day = Carbon::today();
        DB::beginTransaction();
        try {
            $model->save();
            DB::commit();
        } catch (Exception $ex) {
            // ghi log lỗi lại
            DB::rollback();
        }
    }
}
