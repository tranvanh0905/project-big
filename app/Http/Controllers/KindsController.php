<?php

namespace App\Http\Controllers;

use App\Song;

class KindsController extends Controller {

    public function index() {
        return view('admin.kinds.index');
    }

    public function add() {
        return view('admin.kinds.add');
    }

    public function update() {
        return view('admin.kinds.edit');
    }

    public function actionAdd(AddSongRequest $request) {
        $model = new Song();
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            // lấy tên gốc của ảnh
            $filename = $request->image->getClientOriginalName();
            // thay thế ký tự khoảng trắng bằng ký tự '-'
            $filename = str_replace(' ', '-', $filename);
            // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            $filename = uniqid() . '-' . $filename;
            // lưu ảnh và trả về đường dẫn
            $path         = $request->file('image')->storeAs('posts', $filename);
            $model->image = "images/$path";
        }
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
