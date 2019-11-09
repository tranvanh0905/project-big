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
        return view('admin.kinds.index');
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
