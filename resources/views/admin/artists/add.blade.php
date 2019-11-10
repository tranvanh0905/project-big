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
                        <div class=>
                            <div class="col-sm-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Thêm ca sĩ mới</h5>
                                    </div>
                                    <div class="card-block">
                                        <form enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-form-label">Nghệ danh : </label>
                                                <input {{old('name')}} name="name" type="text" class="form-control">
                                                @if($errors->first('name'))
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Họ và tên đầy đủ : </label>
                                                <input {{old('full_name')}} name="full_name" type="text"
                                                       class="form-control">
                                                @if($errors->first('full_name'))
                                                    <span class="text-danger">{{$errors->first('full_name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Thể loại : </label>
                                                <input {{old('style')}} name="style" type="text"
                                                       class="form-control">
                                                @if($errors->first('style'))
                                                    <span class="text-danger">{{$errors->first('style')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-form-label">Ảnh đại diện : </label>
                                                <input type="file" name="image" class="form-control">
                                                @if($errors->first('image'))
                                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-form-label">Ngày sinh : </label>
                                                <input type="date" name="birthday" class="form-control">
                                                @if($errors->first('birthday'))
                                                    <span class="text-danger">{{$errors->first('birthday')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-form-label">Giới thiệu : </label>
                                                <textarea row="10" cols="5" name="about" class="form-control"
                                                          placeholder=""></textarea>
                                                @if($errors->first('about'))
                                                    <span class="text-danger">{{$errors->first('about')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-form-label">Trạng thái : </label>
                                                <select name="status" class="form-control">
                                                    <option value="">Lựa chọn trạng thái</option>
                                                    <option value="1">Hoạt động</option>
                                                </select>
                                                @if($errors->first('status'))
                                                    <span class="text-danger">{{$errors->first('status')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-form-label">Quốc gia : </label>
                                                <select name="countries_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($country as $list)
                                                        <option value="{{$list->id}}">{{$list->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('countries_id'))
                                                    <span class="text-danger">{{$errors->first('countries_id')}}</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
