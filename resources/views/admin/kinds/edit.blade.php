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
                                        <h5>Sửa thể loại</h5>
                                    </div>
                                    <div class="card-block">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tên thể loại : </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Trạng thái : </label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control">
                                                        <option value="opt1">Lựa chọn trạng thái</option>
                                                        <option value="opt2">Type 2</option>
                                                        <option value="opt3">Type 3</option>
                                                        <option value="opt4">Type 4</option>
                                                        <option value="opt5">Type 5</option>
                                                        <option value="opt6">Type 6</option>
                                                        <option value="opt7">Type 7</option>
                                                        <option value="opt8">Type 8</option>
                                                    </select>
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