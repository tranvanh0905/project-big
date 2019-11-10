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
                                        <h5>Quản lý bài hát</h5>
                                        <div class="card-header-right">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>Số thứ tự</th>
                                                    <th>Tên bài hát</th>
                                                    <th>Thể loại</th>
                                                    <th>Ảnh nền</th>
                                                    <th>Người thể hiện</th>
                                                    <th>Ngày phát hành</th>
                                                    <th>Lượt xem</th>
                                                    <th>Lượt yêu thích</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($songs as $song)
                                                    <tr>
                                                        <td>{{$song->id}}</td>
                                                        <td>{{$song->name}}</td>
                                                        @if ($song->genres !== null)
                                                            <td>{{$song->genres->name}}</td>
                                                        @endif
                                                        <td><img src="../files/assets/images/widget/p1.jpg" alt=""
                                                                 class="img-fluid img-20"></td>
                                                        <td>Ca sĩ 01</td>
                                                        <td>{{$song->created_at}}</td>
                                                        <td>{{$song->view}}</td>
                                                        <td></td>
                                                        <td><label class="label label-success">{{$song->status}}</label>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('songs.update', ['song_id' => $song->id])}}"><i
                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                                href="#!"><i
                                                                    class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
