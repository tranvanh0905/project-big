@extends('layouts.admin.main')

@section('title')
    Thêm bài hát
@endsection

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Thêm bài hát mới</h5>
                                    </div>
                                    <div class="card-block">
                                        <form method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-form-label">Tên bài hát : </label>
                                                <input name="name" value="{{old('name')}}" type="text"
                                                       class="form-control">
                                                @if($errors->first('name'))
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                                <div class="form-group">
                                                    <label class="col-form-label">Người thể hiện : </label>
                                                    <div id="artist_song_checkbox" class="form-control">
                                                        <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                        <br/>
                                                    </div>
                                                    @if($errors->first('artist_song'))
                                                        <span
                                                            class="text-danger">{{$errors->first('artist_song')}}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Ngày phát hành : </label>
                                                    <input value="{{old('created_at')}}" name="created_at" type="text"
                                                           class="form-control">
                                                    @if($errors->first('created_at'))
                                                        <span
                                                            class="text-danger">{{$errors->first('created_at')}}</span>
                                                    @endif
                                                </div>
<<<<<<< HEAD
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thể loại : </label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control">
                                                        <option value="opt1">Lựa chọn thể loại âm nhạc</option>
                                                        <option value="opt2">Type 2</option>
                                                        <option value="opt3">Type 3</option>
                                                        <option value="opt4">Type 4</option>
                                                        <option value="opt5">Type 5</option>
                                                        <option value="opt6">Type 6</option>
                                                        <option value="opt7">Type 7</option>
                                                        <option value="opt8">Type 8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group now">
                                                <label class="col-sm-2 col-form-label">Ca si</label>
                                                <select multiple="multiple">
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thư mục âm thanh : </label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Lời bài hát : </label>
                                                <div class="col-sm-10">
                                                    <textarea rows="10" cols="5" class="form-control"
                                                              placeholder="Viết lời bài hát tại đây ..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Trạng thái : </label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control">
                                                        <option value="opt1">Lựa chọn trạng thái</option>
                                                        <option value="opt2">Type 2</option>
                                                        <option value="opt3">Type 3</option>
                                                        <option value="opt4">Type 4</option>
                                                        <option value="opt5">Type 5</option>
                                                        <option value="opt6">Type 6</option>
                                                        <option value="opt7">Type 7</option>
                                                        <option value="opt8">Type 8</option>
                                                    </select>
=======
                                                <div class="form-group">
                                                    <label class="col-form-label">Lời bài hát : </label>
                                                    <textarea name="lyric" rows="10" cols="5" class="form-control"
                                                              placeholder="Viết lời bài hát tại đây ...">{{old('lyric')}}</textarea>
                                                    @if($errors->first('lyric'))
                                                        <span class="text-danger">{{$errors->first('lyric')}}</span>
                                                    @endif
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
                                                </div>
                                                <button
                                                    class="btn btn-success m-t-20 waves-effect waves-light js-programmatic-enable ">
                                                    Xác nhận
                                                </button>
                                                <button
                                                    class="btn btn-danger m-t-20 m-l-10 waves-effect waves-light js-programmatic-disable">
                                                    Quay lại
                                                </button>
                                            </div>
<<<<<<< HEAD
                                            <button
                                                class="btn btn-success m-t-20 waves-effect waves-light js-programmatic-enable ">
                                                Xác nhận
                                            </button>
                                            <button
                                                class="btn btn-danger m-t-20 m-l-10 waves-effect waves-light js-programmatic-disable">
                                                Quay lại
                                            </button>
=======
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Thêm bài hát mới</h5>
                                    </div>
                                    <div class="card-block">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-form-label">Thư mục âm thanh : </label>
                                            <input type="file" name="song_url" class="form-control">
                                            @if($errors->first('song_url'))
                                                <span class="text-danger">{{$errors->first('song_url')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Thể loại : </label>
                                            <select name="genres_id" class="form-control">
                                                <option value="Chưa phân loại">Chưa phân loại</option>
                                                @foreach ($genres as $list)
                                                    <option value="{{$list->name}}">{{$list->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Ảnh đại diện : </label>
                                            <input type="file" name="image" class="form-control">
                                            @if($errors->first('image'))
                                                <span class="text-danger">{{$errors->first('image')}}</span>
                                            @endif
                                        </div>
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
