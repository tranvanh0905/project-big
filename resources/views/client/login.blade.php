@extends('layouts.client.main')

@section('title')
    Đăng nhập
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form ">
                        <div class="logo pt-5 mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Đăng nhập</h1>
                            </div>
                        </div>
                        <form action="" method="post" name="login">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="Nhập mật khẩu">
                            </div>
                            <div class="col-md-12 p-0 text-center">
                                <button type="submit" class="btn btn-block btn-primary">Đăng nhập</button>
                            </div>
                            <div class="form-group pt-3">
                                <p class="text-center">Bạn chưa có tài khoản ? <a href="{{route('reg')}}" id="signup">Đăng
                                        ký ở đây</a>
                                </p>
                            </div>
                            <div class="form-group pt-1">
                                <p class="text-center">Bằng cách đăng ký, bạn sẽ chấp nhận <a href="#">Điều khoản sử
                                        dụng</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
