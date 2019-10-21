@extends('layouts.admin.main')

@section('title')
    Bài hát
@endsection

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Quản lý ca sĩ</h5>
                                        <div class="card-header-right">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>Nghệ danh</th>
                                                    <th>Ảnh đại diện</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Tên đầy đủ</th>
                                                    <th>Lượt theo dõi</th>
                                                    <th>Lượt yêu thích</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Nghệ danh 01</td>
                                                    <td></td>
                                                    <td>22/10/1999</td>
                                                    <td>Ca sĩ 01</td>
                                                    <td>5000</td>
                                                    <td>6000</td>
                                                    <td><label class="label label-success">Đã kích hoạt</label></td>
                                                    <td>
                                                        <a href="{{route('artists.update')}}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nghệ danh 01</td>
                                                    <td></td>
                                                    <td>22/10/1999</td>
                                                    <td>Ca sĩ 01</td>
                                                    <td>5000</td>
                                                    <td>6000</td>
                                                    <td><label class="label label-success">Đã kích hoạt</label></td>
                                                    <td>
                                                        <a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nghệ danh 01</td>
                                                    <td></td>
                                                    <td>22/10/1999</td>
                                                    <td>Ca sĩ 01</td>
                                                    <td>5000</td>
                                                    <td>6000</td>
                                                    <td><label class="label label-success">Đã kích hoạt</label></td>
                                                    <td>
                                                        <a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nghệ danh 01</td>
                                                    <td></td>
                                                    <td>22/10/1999</td>
                                                    <td>Ca sĩ 01</td>
                                                    <td>5000</td>
                                                    <td>6000</td>
                                                    <td><label class="label label-success">Đã kích hoạt</label></td>
                                                    <td>
                                                        <a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nghệ danh 01</td>
                                                    <td></td>
                                                    <td>22/10/1999</td>
                                                    <td>Ca sĩ 01</td>
                                                    <td>5000</td>
                                                    <td>6000</td>
                                                    <td><label class="label label-success">Đã kích hoạt</label></td>
                                                    <td>
                                                        <a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="simpletable_previous">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Quay lại</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="simpletable_next">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">Tiếp theo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
