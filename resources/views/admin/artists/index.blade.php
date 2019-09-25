@extends('layouts.admin.main')

@section('title')
    Quản lý ca sĩ
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-4">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm ca sĩ mới</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">

                        <div class="form-group">
                            <label>Tên ca sĩ</label>
                            <input type="text" class="form-control" placeholder="Nhập tên ca sĩ ...">
                        </div>

                        <div class="form-group">
                            <label>Tên đầy đủ của ca sĩ</label>
                            <input type="text" class="form-control" placeholder="Nhập tên đầy đủ của ca sĩ ...">
                        </div>

                        <div class="form-group">
                            <label>Ngày sinh</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'"
                                       data-mask="">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>Tiểu sử</label>
                            <textarea class="form-control" rows="3" placeholder="Nhập tiểu sử ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Phong cách</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Quốc gia</label>
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
                    <button type="submit" class="btn btn-primary">Thêm ca sĩ</button>
                </div>
            </div>
        </div>
        <div class="col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tất cả các ca sĩ</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Tên ca sĩ</th>
                            <th class="text-center">Bài hát</th>
                            <th class="text-center">Playlist</th>
                            <th class="text-center">Album</th>
                        </tr>
                        <tr class="text-center">
                            <td>183</td>
                            <td>John Doe</td>
                            <td>10</td>
                            <td>2</td>
                            <td>5</td>
                        </tr>
                        <tr class="text-center">
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td>10</td>
                            <td>2</td>
                            <td>5</td>
                        </tr>
                        <tr class="text-center">
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>10</td>
                            <td>2</td>
                            <td>5</td>
                        </tr>
                        <tr class="text-center">
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>10</td>
                            <td>2</td>
                            <td>5</td>
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
