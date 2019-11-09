<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Http\Requests\GenresRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GenresController extends Controller
{

    public function index()
    {
<<<<<<< HEAD
        return view('admin.kinds.index');
=======
        $genres = DB::table('genres')->paginate(20);
        return view('admin.kinds.index', compact('genres'));
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
    }

    public function add()
    {
        return view('admin.kinds.add');
    }

    public function update()
    {
        return view('admin.kinds.edit');
    }

    public function actionAdd(GenresRequest $request)
    {
        $model = new Genres();
        $model->fill($request->all());
        $model->image = "NULL";
        $model->status = 0;
<<<<<<< HEAD
=======
        $current_day = Carbon::today();
        $model->created_at = date_timestamp_get($current_day);
        $array = ["asd", "asd23"];
        var_dump($array_json);
        die;
        var_dump($model->created_at);
        die;
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
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
