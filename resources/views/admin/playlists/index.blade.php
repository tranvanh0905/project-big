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
                                        <h5>Quản lý playlist</h5>
                                        <div class="card-header-right">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>Số thứ tự</th>
                                                    <th>Tên playlist</th>
                                                    <th>Người thể hiện</th>
                                                    <th>Ngày phát hành</th>
                                                    <th>Lượt yêu thích</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <th>Tên danh sách 1</th>
                                                    <th>Ca sĩ 1</th>
                                                    <th>22/10/2019</th>
                                                    <th>3000</th>
                                                    <td>
                                                        <a href="{{route('playlists.update')}}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <th>Tên danh sách 1</th>
                                                    <th>Ca sĩ 1</th>
                                                    <th>22/10/2019</th>
                                                    <th>3000</th>
                                                    <td>
                                                        <a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <th>Tên danh sách 1</th>
                                                    <th>Ca sĩ 1</th>
                                                    <th>22/10/2019</th>
                                                    <th>3000</th>
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
