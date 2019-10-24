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
                                        <h5>Thêm album mới</h5>
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
                                                <label class="col-sm-2 col-form-label">Danh sách bài hát: </label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="dual-list list-left col-md-5">
                                                    <div class="well text-right">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                                                    <input type="text" name="SearchDualList" class="form-control" placeholder="Tìm kiếm"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="btn-group">
                                                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Bài chưa chọn
                                                                <a href="https://github.com/bbilginn/bootstrap-duallist" target="_blank">github</a>
                                                            </li>
                                                            <li class="list-group-item">Bài chưa chọn</li>
                                                            <li class="list-group-item">Bài chưa chọn</li>
                                                            <li class="list-group-item">Bài chưa chọn</li>
                                                            <li class="list-group-item">Bài chưa chọn</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="list-arrows col-md-2 text-center">
                                                    <button class="btn btn-default btn-sm move-left" type="button">
                                                        <i class="fas fa-arrow-left"></i>
                                                    </button>

                                                    <button class="btn btn-default btn-sm move-right" type="button">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>

                                                <div class="dual-list list-right col-md-5">
                                                    <div class="well">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="btn-group">
                                                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="input-group">
                                                                    <input type="text" name="SearchDualList" class="form-control" placeholder="Tìm kiếm"/>
                                                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Bài được chọn 01</li>
                                                            <li class="list-group-item">Bài được chọn 01</li>
                                                            <li class="list-group-item">Bài được chọn 01</li>
                                                            <li class="list-group-item">Bài được chọn 01</li>
                                                            <li class="list-group-item">Bài được chọn 01</li>
                                                        </ul>
                                                    </div>
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
