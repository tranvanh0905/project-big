@extends('layouts.admin.main')

@section('title')
    Quản lý album
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-4">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm album mới</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">

                        <div class="form-group">
                            <label>Tên album</label>
                            <input type="text" class="form-control" placeholder="Nhập tên album ...">
                        </div>

                        <div class="form-group">
                            <label>Mô tả album</label>
                            <textarea class="form-control" rows="3" placeholder="Nhập mô tả album ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Ca sĩ</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh đại diện</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </form>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thêm album</button>
                </div>
            </div>
        </div>
        <div class="col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tất cả các album</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Tên album</th>
                            <th class="text-center">Ca sĩ</th>
                            <th class="text-center">Lượt nghe</th>
                        </tr>
                        <tr class="text-center">
                            <td>183</td>
                            <td>John Doe</td>
                            <td>John Doe</td>
                            <td>2</td>
                        </tr>
                        <tr class="text-center">
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td>John Doe</td>
                            <td>2</td>
                        </tr>
                        <tr class="text-center">
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>John Doe</td>
                            <td>2</td>
                        </tr>
                        <tr class="text-center">
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>John Doe</td>
                            <td>2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
