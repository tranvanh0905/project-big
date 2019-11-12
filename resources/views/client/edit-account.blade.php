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
            <label for="first-name">Họ</label>
            <input type="text" name="first_name"
                   class="form-control text-dark @if($errors->first('first_name')) is-invalid @endif" id="first_name"
                   value="{{old('first_name', Auth::user()->first_name)}}">
            @if($errors->first('first_name'))
                <span class="text-danger">
                    {{$errors->first('first_name')}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="last-name">Tên</label>
            <input type="text" name="last_name"
                   class="form-control text-dark @if($errors->first('last_name')) is-invalid @endif" id="last_name"
                   value="{{old('last_name', Auth::user()->last_name)}}">
            @if($errors->first('last_name'))
                <span class="text-danger">
                    {{$errors->first('last_name')}}
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
