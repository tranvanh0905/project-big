@extends('layouts.client.main-account')

@section('title')
    Đổi mật khẩu
@endsection

@section('content')
    <h2>Đổi mật khẩu</h2>
    <hr>
    <form action="">
        <div class="form-group">
            <label for="current-password">Mật khẩu hiện tại</label>
            <input type="text" name="current-password" class="form-control" id="current-password">
        </div>
        <div class="form-group">
            <label for="new-password">Mật khẩu mới</label>
            <input type="text" name="last-name" class="form-control" id="new-password">
        </div>
        <div class="form-group">
            <label for="re-new-password">Nhập lại mật khẩu mới</label>
            <input type="text" name="re-new-password" id="re-new-password" class="form-control" >
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg">Đổi mật khẩu</button>
        </div>
    </form>
@endsection
