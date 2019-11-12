@extends('layouts.client.main')

@section('title')
    Đăng ký
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="second">
                    <div class="myform form ">
                        <div class="logo mb-3 pt-5">
                            <div class="col-md-12 text-center">
                                <h1>Đăng ký</h1>
                            </div>
                        </div>
                        <form action="#" name="registration">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ</label>
                                <input type="text" name="firstname" class="form-control" id="firstname"
                                       placeholder="Nhập họ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" name="lastname" class="form-control" id="lastname"
                                       placeholder="Nhập tên">
                            </div>
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
                            <div class="col-md-12 text-center mb-3 p-0">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">
                                    Bắt đầu với mọi thứ đều miễn phí
                                </button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <p class="text-center"><a href="{{route('login')}}" id="login">Bạn đã có tài khoản
                                            ?</a></p>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
