@extends('layouts.admin.main')

@section('title')
    Thêm album mới
@endsection

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-8">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Thêm album mới</h5>
                                    </div>
                                    <div class="card-block">
                                        <form method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-form-label">Tên album : </label>
                                                <input type="text" value="{{$album->title}}" name="title"
                                                       class="form-control">
                                                @if($errors->first('title'))
                                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-form-label">Người thể hiện : </label>
                                                <select name="artist_id" id="person_song_list"
                                                        class="form-control">
                                                    <option value="">Lựa chọn ca sĩ</option>
                                                    @foreach ($artists as $artist)
                                                        <option
                                                            @if ($album->artist_id == $artist->id) {{'selected'}} @endif  value="{{$artist->id}}">{{$artist->nick_name}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('artist_id'))
                                                    <span class="text-danger">{{$errors->first('artist_id')}}</span>
                                                @endif

                                            </div>
                                            <div id="ajax_artist">

                                                <div class="form-group">
                                                    <label class="col-form-label">Bài hát : </label>
                                                    <select class="js-example-basic-multiple form-control"
                                                            name="person_song[]" multiple="multiple">
                                                        @if ($songs !== null)
                                                            @foreach ($songs as $list)
                                                                <option selected
                                                                        value="{{$list->id}}">{{$list->name}}</option>
                                                            @endforeach
                                                            @foreach ($all_song as $list)
                                                                    <option value="{{$list->id}}">{{$list->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @if($errors->first('person_song'))
                                                        <span
                                                            class="text-danger">{{$errors->first('person_song')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Ngày phát hành : </label>
                                                <input value="{{$album->release_date}}" name="release_date" type="date"
                                                       class="form-control">
                                                @if($errors->first('release_date'))
                                                    <span
                                                        class="text-danger">{{$errors->first('release_date')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Mô tả: </label>
                                                <textarea name="description" rows="10" cols="5" class="form-control"
                                                          placeholder="Viết lời mô tả tại đây ...">{{$album->description}}</textarea>
                                                @if($errors->first('description'))
                                                    <span
                                                        class="text-danger">{{$errors->first('description')}}</span>
                                                @endif
                                            </div>
                                            <button
                                                class="btn btn-success m-t-20 waves-effect waves-light js-programmatic-enable ">
                                                Xác nhận
                                            </button>
                                            <button
                                                class="btn btn-danger m-t-20 m-l-10 waves-effect waves-light js-programmatic-disable">
                                                Quay lại
                                            </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Thêm album mới</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="form-group">
                                            <label class="col-form-label">Ảnh bìa : </label>
                                            <input type="file" name="cover_image" class="form-control">
                                            @if($errors->first('cover_image'))
                                                <span class="text-danger">{{$errors->first('cover_image')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <img width="100%" src="{{url($album->cover_image)}}" alt="">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $url = url('admin');
    ?>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
        $(document).ready(function () {
            $("select#person_song_list").on("change", function () {
                var selected = $(this).children("option:selected").val();
                $.ajax({
                    type: "GET",
                    url: '{{$url}}' + "/ajax/artist_song/" + selected,
                    cache: false,
                    success: function (e) {
                        $("#ajax_artist").html(e);
                    },
                    error: function () {
                        $("#ajax_artist").html(' <label class="col-form-label">Bài hát : </label>\n' +
                            '                                                <select readonly="true"\n' +
                            '                                                        class="js-example-basic-multiple form-control"></select>');
                    }
                })
                ;
            })
        })
    </script>
@endsection


