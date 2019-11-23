@extends('layouts.admin.main')

@section('title')
    Tài khoản
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <a href="{{route('kinds.add')}}" class="btn btn-primary mr-auto"> <i class="nav-icon fas fa-plus"></i> Thêm thể loại</a>
                <form action="">
                    <div class="card-tools ml-auto">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="searchs" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="song_table" class="table table-bordered table-striped dataTable hover">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên thể loại</th>
                                    <th class="text-center">Ảnh bìa</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@endsection
