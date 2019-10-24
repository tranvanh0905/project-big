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
                                        <h5>Sửa album mới</h5>
                                    </div>
                                    <div class="card-block">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tên album : </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Người thể hiện : </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Mô tả: </label>
                                                <div class="col-sm-10">
                                                    <textarea rows="10" cols="5" class="form-control" placeholder="Viết lời bài hát tại đây ..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-success">Thêm bài hát</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thư mục âm thanh : </label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-danger">Xóa</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thư mục âm thanh : </label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-danger">Xóa</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Thư mục âm thanh : </label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-danger">Xóa</button>
                                                </div>
                                            </div>
                                            <button class="btn btn-success m-t-20 waves-effect waves-light js-programmatic-enable ">
                                                Xác nhận
                                            </button>
                                            <button class="btn btn-danger m-t-20 m-l-10 waves-effect waves-light js-programmatic-disable">
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
