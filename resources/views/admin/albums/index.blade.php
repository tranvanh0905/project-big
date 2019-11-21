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
                                        <h5>Quản lý album</h5>
                                        <div class="card-header-right">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên Album</th>
                                                    <th>Người thể hiện</th>
                                                    <th>Ngày phát hành</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($albums as $album)
                                                    <tr>
                                                        <td>{{$album->id}}</td>
                                                        <th>{{$album->title}}</th>
                                                        <th>{{$album->artist->nick_name}}</th>
                                                        <th>{{$album->release_date}}</th>
                                                        <th>{{$album->status}}</th>
                                                        <td>
                                                            <a href="{{route('albums.update', ['id' => $album->id])}}"><i
                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green" onclick="return confirm('Are you sure you want to delete this item?');"></i></a><a
                                                                href="{{route('albums.delete', ['id' => $album->id])}}"><i
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
