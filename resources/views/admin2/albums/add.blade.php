@extends('layouts.admin2.main')

@section('title')
    Thêm album mới
@endsection

@section('content')
    <div class="col-md-8">
        <!-- general form elements disabled -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Thông tin bài hát</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Tên album : </label>
                        <input type="text" value="{{old('title')}}" name="title" class="form-control">
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
                                <option value="{{$artist->id}}">{{$artist->nick_name}}</option>
                            @endforeach
                        </select>
                        @if($errors->first('artist_id'))
                            <span class="text-danger">{{$errors->first('artist_id')}}</span>
                        @endif

                    </div>
                    <div id="ajax_artist">
                        <label class="col-form-label">Bài hát : </label>
                        <select readonly="true"
                                class="js-example-basic-multiple form-control"></select>
                        @if($errors->first('person_song'))
                            <span
                                class="text-danger">{{$errors->first('person_song')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Ngày phát hành : </label>
                        <input value="{{old('release_date')}}" name="release_date" type="date"
                               class="form-control">
                        @if($errors->first('release_date'))
                            <span
                                class="text-danger">{{$errors->first('release_date')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Mô tả: </label>
                        <textarea name="description" rows="10" cols="5" class="form-control"
                                  placeholder="Viết lời mô tả tại đây ...">{{old('description')}}</textarea>
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
    <div class="col-md-4">
        <!-- general form elements disabled -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Thông tin bài hát</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="card-block">
                    <div class="form-group">
                        <label class=" col-form-label">Trạng thái : </label>
                        <select name="status" class="form-control">
                            <option value="">Lựa chọn trạng thái</option>
                            <option value="1" selected>Hoạt động</option>
                            <option value="0">Không hoạt động</option>
                        </select>
                        @if($errors->first('status'))
                            <span class="text-danger">{{$errors->first('status')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh bìa</label>

                        <div class="custom-file">
                            <input id="fileInput" type="file" name="cover_image" class="custom-file-input">
                            <label class="custom-file-label" for="exampleInputFile">Lựa chọn ảnh</label>
                        </div>
                        @if($errors->first('cover_image'))
                            <span class="text-danger">{{$errors->first('cover_image')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <img id="imgPreview" width="100%" alt="">
                    </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php
    $url = url('admin');
    ?>
@endsection
@section('custom-js')
    <script>
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
                            '<select readonly="true"\n' +
                            '                                                        class="js-example-basic-multiple form-control"></select>');
                    }
                })
                ;
            })
        })
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgPreview1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#fileInput1").change(function () {
            readURL(this);
        });
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection

