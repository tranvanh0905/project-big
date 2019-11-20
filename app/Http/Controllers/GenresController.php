<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Http\Requests\EditGenres;
use App\Http\Requests\GenresRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class GenresController extends Controller
{

    public function index(\Illuminate\Http\Request $request)
    {
        $search = $request->get('search');
        $show_more = $request->get('show_more');
        if (!$request->has('search') && !$request->has('show_more') || empty($search) && empty($show_more)) {
            $genres = Genres::paginate(20);
        } else if ($request->has('search') && !$request->has('show_more') || !empty($search) && empty($show_more)) {
            $genres = Genres::where('name', 'like', "%$search%")
                ->paginate(20);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $genres->withPath(\Illuminate\Support\Facades\URL::current() . "?search=$search");
        } else if (!$request->has('search') && $request->has('show_more') || empty($search) && !empty($show_more)) {
            $genres = Genres::paginate($show_more);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $genres->withPath(\Illuminate\Support\Facades\URL::current() . "?show-more=$show_more");
        } else {
            $genres = Genres::where('name', 'like', "%$search%")
                ->paginate($show_more);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $genres->withPath(\Illuminate\Support\Facades\URL::current() . "?search=$search&&show-more=$show_more");
        }
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
