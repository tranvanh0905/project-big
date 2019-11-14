@extends('layouts.client.main')

@section('title')
    Single genre
@endsection

@section('content')
    <div class="master-container-fluid">
        <div class="pt-4 pt-lg-5"></div>
        <div class="pr-0 pr-e-md-15">
            <section>
                <div class="d-flex flex-row">
                    <div class="title-box">
                        <h2 class="title h3-md mb-e-20 mb-e-lg-40">{{$genres->name}}</h2>
                        <h4 class="title">Mới nhất của {{$genres->name}}</h4>
                    </div>
                </div>

                @if(count($latestSong) == 0)
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="no-content-block text-center p-5 rounded">
                                <img src="{{url('client/images/audio_default.png')}}" alt="no-song"
                                     class="d-block mx-auto"
                                     width="100px" height="auto">
                                <h3 class="m-3">Các bài hát đang được cập nhật...</h3>
                                <a href="{{route('client.genres')}}">Khám phá thể loại khác</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="adonis-carousel auto-fit-columns viewport-animate" data-animation="slideUp"
                         data-animation-item=".item" data-auto-width="yes" data-item-parent=".owl-carousel"
                         data-auto-fit-items=".item" data-dots="yes" data-item-width="175"
                         data-item-max-width="180">
                        <div class="gutter-30">
                            <div class="owl-carousel owl-theme-adonis">
                                @foreach($latestSong as $song)
                                    <div class="item">

                                        <div class="music-img-box  mb-e-30 mb-e-md-40 ">
                                            <div class="img-box box-rounded-sm img-box-md">
                                                <img class="retina" src="{{$song->cover_image}}"
                                                     data-2x="{{$song->cover_image}}" alt="{{$song->name}}">
                                                <div class="hover-state">
                                                    <div
                                                        class="absolute-bottom-left pl-e-15 pb-e-15 adonis-album-button"
                                                        data-type="song" data-album-id="{{$song->id}}">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                                    </div>
                                                    <div class="absolute-top-right pr-e-15 pt-e-15">
                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                class="adonis-icon icon-4x"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="title"><a
                                                    href="{{route('singleSong', ['songId' => $song->id])}}">{{$song->name}}</a>
                                            </h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

            </section>

            <div class="title-box">
                <h6 class="sub-title inactive-color">{{$genres->name}}</h6>
                <h3 class="title">Tất cả bài hát thể loại {{$genres->name}}</h3>
            </div>
            @if(count($songOfGenres) == 0)
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="no-content-block text-center p-5 rounded">
                            <img src="{{url('client/images/audio_default.png')}}" alt="no-song"
                                 class="d-block mx-auto"
                                 width="100px" height="auto">
                            <h3 class="m-3">Các bài hát đang được cập nhật...</h3>
                            <a href="{{route('client.genres')}}">Khám phá thể loại khác</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row auto-columns viewport-animate" data-animation="slideUp" data-animation-item=".col-auto"
                     data-item-parent=".auto-columns"
                     data-responsive-width="0:100%|300:50%|560:33%|820:25%|980:20%|1240:16.66%|1500:14.2858%">
                    @foreach($songOfGenres as $song)
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-lg-40">
                                <div class="img-box box-rounded-sm">
                                    <img class="retina" src="{{$song->cover_image}}"
                                         data-2x="{{$song->cover_image}}" alt="{{$song->name}}">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                        <span class="pointer play-btn-dark round-btn adonis-album-button"
                                              data-album-id="{{$song->id}}" data-type="song"><i
                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a
                                        href="{{route('singleSong', ['songId' => $song->id])}}">{{$song->name}}</a></h6>
                                <p class="sub-title category"><a href="#">Imagine</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
