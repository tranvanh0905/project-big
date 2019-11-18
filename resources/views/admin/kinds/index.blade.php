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
                                                        <td>{{$genre->name}}</td>
                                                        <td>{{count(\App\Song::all()->where(['id' => $genre->id]))}}</td>
                                                        <td>{{$genre->created_at}}</td>
                                                        <td><label
                                                                class="label label-success">{{$genre->status}}</label>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('kinds.update', ["id" => $genre->id])}}"><i
                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a
                                                                href="{{route('kinds.delete', ['id' => $genre->id])}}" onclick="return confirm('Are you sure you want to delete this item?');"><i
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
                            {{ $genres->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
