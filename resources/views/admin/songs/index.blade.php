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
                            <div class="col-xl-12 col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Danh sách bài hát</h5>
                                        <div class="card-header-right">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
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
                                                        <td><img src="{{url($song->cover_image)}}" width="50px"></td>
                                                        <td></td>
                                                        <td>{{$song->created_at}}</td>
                                                        <td>{{$song->view}}</td>
                                                        <td></td>
                                                        <td><label class="label label-success">{{$song->status}}</label>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('songs.update', ['song_id' => $song->id])}}"><i
                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                                href="{{route('songs.delete', ['song_id' => $song->id])}}"><i
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
                            {{ $songs->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
