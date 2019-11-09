@extends('layouts.admin.main')

@section('title')
    Danh sách thể loại
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
<<<<<<< HEAD
                                        <h5>Quản lý thể loại</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <div>
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Số thứ tự</th>
                                                        <th>Tên thể loại</th>
                                                        <th>Số lượng bài hát</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Trạng thái</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Thể loại 01</td>
                                                        <td>500</td>
                                                        <td>22/10/2019</td>
                                                        <td><label class="label label-success">Đang chạy</label></td>
=======
                                        <h5>Danh sách thể loại</h5>
                                        <div class="card-header-right">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên thể loại</th>
                                                    <th>Số lượng bài hát</th>
                                                    <th>Ngày tạo</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($genres as $genre)
                                                    <tr>
                                                        <td>{{$genre->id}}</td>
                                                        <td>{{$genre->name}}]</td>
                                                        <td>{{count(\App\Song::all()->where(['id' => $genre->id]))}}</td>
                                                        <td>{{$genre->created_at}}</td>
                                                        <td><label
                                                                class="label label-success">{{$genre->status}}</label>
                                                        </td>
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
                                                        <td>
                                                            <a href="{{route('kinds.update')}}"><i
                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                                href="#!"><i
                                                                    class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                        </td>
                                                    </tr>
<<<<<<< HEAD
                                                    </tbody>
                                                </table>
                                            </div>
=======
                                                @endforeach
                                                </tbody>
                                            </table>
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                            <ul class="pagination">
<<<<<<< HEAD
                                <li class="paginate_button page-item previous disabled" id="simpletable_previous">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0"
                                       class="page-link">Quay lại</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0"
                                       class="page-link">1</a></li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0"
                                       class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="simpletable_next">
                                    <a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0"
                                       class="page-link">Tiếp theo</a></li>
=======
                                {{ $genres->links() }}
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
