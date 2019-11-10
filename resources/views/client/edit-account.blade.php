@extends('layouts.client.main-account')

@section('title')
    Sửa hồ sơ
@endsection

@section('content')
    <h2>Sửa hồ sơ</h2>
    <hr>
    <form action="">
        <div class="form-group">
            <label for="first-name">Họ</label>
            <input type="text" name="first-name" class="form-control" id="first-name">
        </div>
        <div class="form-group">
            <label for="last-name">Tên</label>
            <input type="text" name="last-name" class="form-control" id="last-name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" disabled value="huynhthuanvugia@gmail.com">
        </div>
        <div class="form-group">
            <label for="gender">Giới tính</label>
            <select name="gender" id="gender" class="form-control">
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="birth-day">Ngày sinh</label>
            <input type="text" name="birth-day" class="form-control" id="first-name">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg">Lưu hồ sơ</button>
        </div>
    </form>
@endsection
