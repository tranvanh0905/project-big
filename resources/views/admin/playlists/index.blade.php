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
                                        <h5>Quản lý danh sách phát</h5>
                                        <div class="card-header-right">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên danh sách phát</th>
                                                    <th>Ngày phát hành</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($playlists as $playlist)
                                                    <tr>
                                                        <td>{{$playlist->id}}</td>
                                                        <th>{{$playlist->name}}</th>
                                                        <th>{{$playlist->created_at}}</th>
                                                        <th>{{$playlist->status}}</th>
                                                        <td>
                                                            <a href="{{route('playlist.update', ['playlist_id' => $playlist->id])}}"><i
                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                                href="{{route('playlist.delete', ['playlist_id' => $playlist->id])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i
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
                        <ul class="pagination">
                            {{ $playlists->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
