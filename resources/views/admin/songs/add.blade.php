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
                                                <input name="name" type="text" class="form-control">
                                                @if($errors->first('name'))
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Người thể hiện : </label>
                                                <div id="artist_song_checkbox" class="form-control"
                                                     style="border:2px solid #ccc; width:300px; height: 100px; overflow-y: scroll;">
                                                    <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                    <br/>
                                                    <input name="artist_song[]" value="3" type="checkbox"/> Ca sĩ B
                                                    <br/>
                                                    <input name="artist_song[]" value="5" type="checkbox"/> Ca sĩ C
                                                    <br/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Ngày phát hành : </label>
                                                <input name="name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Lời bài hát : </label>
                                                <textarea name="lyric" rows="10" cols="5" class="form-control"
                                                          placeholder="Viết lời bài hát tại đây ..."></textarea>
                                                @if($errors->first('lyric'))
                                                    <span class="text-danger">{{$errors->first('lyric')}}</span>
                                                @endif
                                            </div>
                                            <button
                                                class="btn btn-success m-t-20 waves-effect waves-light js-programmatic-enable ">
                                                Xác nhận
                                            </button>
                                            <button
                                                class="btn btn-danger m-t-20 m-l-10 waves-effect waves-light js-programmatic-disable">
                                                Quay lại
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Thêm bài hát mới</h5>
                                    </div>
                                    <div class="card-block">
                                        <form method="POST" enctype="multipart/form-data">
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
