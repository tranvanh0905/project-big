<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Http\Requests\EditGenres;
use App\Http\Requests\GenresRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GenresController extends Controller
{

    public function index()
    {
        $genres = DB::table('genres')->paginate(20);
        return view('admin.kinds.index', compact('genres'));
    }

    public function add()
    {
        return view('admin.kinds.add');
    }

    public function update($genres_id)
    {
        $genres = Genres::find($genres_id);
        return view('admin.kinds.edit', compact('genres'));
    }

    public function actionDelete($id)
    {
        $model = Genres::find($id);
        if ($model !== null) {
            $model->delete();
            return redirect()->route('kinds.home');
        } else {
            return redirect()->route('kinds.home');
        }
    }

    public function actionUpdate(EditGenres $request, $genres_id)
    {
        $model = Genres::find($genres_id);
        $model->fill($request->all());

        if ($request->hasFile('image')) {
            // lấy tên gốc của ảnh
            $filename = $request->image->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('image')->storeAs('upload/image', $filename);
            $request->file('image')->move('upload/image', $filename);
            $model->image = "$path";
        }
        $model->save();
        return redirect()->route('kinds.home');
    }

    public function actionAdd(GenresRequest $request)
    {
        $model = new Genres();
        $model->fill($request->all());
        $model->created_by = 0;
        if ($request->hasFile('image')) {
            // lấy tên gốc của ảnh
            $filename = $request->image->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path = $request->file('image')->storeAs('upload/image', $filename);
            $request->file('image')->move('upload/image', $filename);
            $model->image = "$path";
        }
        DB::beginTransaction();
        try {
            $model->save();
            DB::commit();
            return redirect()->route('kinds.home');
        } catch (Exception $ex) {
            // ghi log lỗi lại
            DB::rollback();
        }
    }
}
