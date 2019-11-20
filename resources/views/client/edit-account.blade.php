@extends('layouts.client.main-account')

@section('title')
    Sửa hồ sơ
@endsection

@section('content')
    <h2>Sửa hồ sơ</h2>
    <hr>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{route('user-edit-profile')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="user_name">Tên tài khoản</label>
            <input type="text" name="user_name"
                   class="form-control text-dark @if($errors->first('user_name')) is-invalid @endif" id="user_name"
                   value="{{old('user_name', Auth::user()->user_name)}}">
            @if($errors->first('user_name'))
                <span class="text-danger">
                    {{$errors->first('user_name')}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="full_name">Họ và tên</label>
            <input type="text" name="full_name"
                   class="form-control text-dark @if($errors->first('full_name')) is-invalid @endif" id="full_name"
                   value="{{old('full_name', Auth::user()->full_name)}}">
            @if($errors->first('full_name'))
                <span class="text-danger">
                    {{$errors->first('full_name')}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="gender">Giới tính</label>
            <select name="gender" id="gender" class="form-control text-dark">
                <option value="0" @if(Auth::user()->gender == 0) selected @endif>Nam</option>
                <option value="1" @if(Auth::user()->gender == 1) selected @endif>Nữ</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Lưu hồ sơ</button>
        </div>
    </form>
@endsection
