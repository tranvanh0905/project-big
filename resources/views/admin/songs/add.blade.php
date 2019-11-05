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
                            <div class="col-sm-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Thêm bài hát mới</h5>
                                    </div>
                                    <div class="card-block">
                                        <form method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tên bài hát : </label>
                                                <div class="col-sm-10">
                                                    <input name="name" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Người thể hiện : </label>
                                                <div class="col-sm-10">
                                                    <div id="artist_song_checkbox" class="form-control">
                                                        <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                        <br/>
                                                        <input name="artist_song[]" value="3" type="checkbox"/> Ca sĩ B
                                                        <br/>
                                                        <input name="artist_song[]" value="5" type="checkbox"/> Ca sĩ C
                                                        <br/>
                                                        <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                        <br/>
                                                        <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                        <br/>
                                                        <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                        <br/>
                                                        <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                        <br/>
                                                        <input name="artist_song[]" value="2" type="checkbox"/> Ca sĩ A
                                                        <br/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thể loại : </label>
                                                <div class="col-sm-10">
                                                    <select name="genres_id" class="form-control">
                                                        @foreach ($genres as $list)
                                                            <option value="{{$list->name}}">{{$list->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thư mục âm thanh : </label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="song_url" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Ảnh đại diện : </label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Lời bài hát : </label>
                                                <div class="col-sm-10">
                                                    <textarea name="lyric" rows="10" cols="5" class="form-control"
                                                              placeholder="Viết lời bài hát tại đây ..."></textarea>
                                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
