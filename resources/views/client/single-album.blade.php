@extends('layouts.client.main')

@section('title')
    Album
@endsection

@section('content')
    <div class="album-wrap">
        <div class="master-container-fluid">
            <div class="pt-4 pt-lg-5"></div>
            <div class="row">
                <div class="col-md-3 flex-column-sidebar-md text-center text-md-left">
                    <div class="album-image">
                        <div class="music-img-box d-inline-block">
                            <div class="img-box">
                                <img class="retina box-rounded-md" src="{{$singleAlbum->cover_image}}"
                                     data-2x="{{$singleAlbum->cover_image}}" alt="{{$singleAlbum->title}}">
                            </div>
                            <div class="absolute-info">
                                <a class="btn btn-60-60 btn-primary absolute-center adonis-album-button round-btn text-light"
                                   data-album-id="{{$singleAlbum->id}}" data-type="album" role="button" tabindex="0">
                                            <span class="adonis-icon icon-play icon-2x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                        xlink:href="#icon-brand-play"></use></svg></span>
                                    <span class="adonis-icon icon-pause icon-2x"><svg version="1.1"
                                                                                      xmlns="http://www.w3.org/2000/svg"
                                                                                      height="20"
                                                                                      viewBox="0 0 29 32"><path
                                                d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z"></path><path
                                                d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z"></path></svg></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 album-likes text-center">
                                <span class="adonis-icon pr-2 icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                        <span class="pr-2">{{$singleAlbum->like}}</span>
                        <span class="adonis-icon pr-2 icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    version="1.1"><use
                                    xlink:href="#icon-brand-play"></use></svg></span>
                        <span>{{$singleAlbum->views}}</span>
                    </div>
                    <div class="button-save-share pb-4 text-center">
                        <a class="btn btn-primary mx-auto" href="#">Lưu vào thư viện</a>
                    </div>
                    <div class="about">
                        <h4>Mô tả</h4>
                        <p>
                            {{$singleAlbum->description}}
                        </p>
                    </div>
                    <div class="pt-e-20 pt-e-lg-40"></div>
                </div>
                <div class="col-md-9 flex-column-content-md pl-e-xl-40">
                    <div class="album-top-box text-center text-md-left">
                        <h6 class="inactive-color">ALBUM</h6>
                        <h1 class="album-title"> {{$singleAlbum->title}}</h1>
                        <p class="mb-2">Trình bày: <a href="#">Danielle Bradberry</a> Classical</p>
                        <div class="separator mb-4 mt-4">
                            <span class="separator-md"></span>
                        </div>
                        <p class="mb-2">{{count($songOfAlbum)}} bài hát - 30 phút</p>
                        <p class="mb-2">Ra mắt chính thức {{$singleAlbum->release_date}}</p>
                    </div>

                    <div class="tab-wrapper">
                        <div class="pb-5"></div>
                        <div class="d-flex mb-3 justify-content-between">
                            <ul class="nav product-tabs" id="pills-tab" role="tablist">
                                <li class="nav-item ">
                                    <a class="active nav-link f-w-600" id="single-songs-tab" data-toggle="pill"
                                       href="#single-songs" role="tab" aria-controls="single-songs"
                                       aria-selected="true">Tất cả bài hát</a>
                                </li>
                            </ul>
                            <a class="btn text-white btn-primary adonis-album-button" data-type="album"
                               data-album-id="{{$singleAlbum->id}}"> <span class="hover-show adonis-icon icon-1x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-brand-play"></use></svg> </span>   Phát tất cả</a>
                        </div>
                        <div class="pt-4"></div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="single-songs" role="tabpanel"
                                 aria-labelledby="single-songs-tab">
                                <div class="shop-items">
                                    <ul class="adonis-album-list pb-5">
                                        <li>
                                            <div class="item-number h6 inactive-color">#</div>
                                            <div class="item-title h6 inactive-color">Tên</div>
                                            <div class="item-genre h6 inactive-color">Thể loại</div>
                                            <div class="item-duration h6 inactive-color">Độ dài</div>
                                            <div class="item-tools">
                                        <span class="adonis-icon h6 inactive-color icon-1x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span>
                                            </div>
                                        </li>
                                        @foreach($songOfAlbum as $song)

                                            <li class="item hover-bg-item">
                                                <div class="item-number">
                                                    <span class="hover-hide">1</span>
                                                    <span class="hover-show adonis-icon icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-brand-play"></use></svg> </span>
                                                </div>
                                                <div class="item-title">{{$song->name}}</div>
                                                <div class="item-genre"><span
                                                        class="hover-hide hover-lg-show">{{$song->genres_id}}</span>
                                                </div>
                                                <div class="item-duration"><span class="hover-hide">14:13</span></div>
                                                <div class="item-tools">
                                                    <span class="hover-hide">{{$song->like}}</span>
                                                    <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                        <span class="ml-3 adonis-icon icon-3x"><svg
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                    xlink:href="#icon-plus"></use></svg> </span>
                                                        <span
                                                            class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                                class="adonis-icon icon-4x"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                    </div>
                                                </div>
                                                <div class="hover-bg gradient-adonis"></div>
                                            </li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mb-2">Released on November 12, 2017</p>
                    <p class="mb-2">&copy; 2018 Adonis Inc.</p>
                </div>
            </div>
            <div class="more-items">
                <div class="pt-e-20 pt-e-lg-40"></div>
                <div class="title-box">
                    <h2 class="title h3-md">Xem thêm album của Danielle Bradbery</h2>
                </div>
                <div class="adonis-carousel auto-fit-columns" data-auto-width="yes"
                     data-item-parent=".owl-carousel" data-auto-fit-items=".item" data-dots="yes"
                     data-item-width="260" data-item-max-width="280">
                    <div class="gutter-30">
                        <div class="owl-carousel owl-theme-adonis">
                            @foreach($relateAlbum as $album)
                            <div class="item hover-bg-item">
                                <div class="music-img-box">
                                    <div class="img-box box-rounded-sm">
                                        <img class="retina"
                                             src="{{$album->cover_image}}"
                                             data-2x="{{$album->cover_image}}"
                                             alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn adonis-album-button" data-type="album" data-album-id="{{$album->id}}"><i
                                                                class="play-icon" ></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-20 pt-e-20">
                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                class="adonis-icon icon-4x"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="{{route('singleAlbum', ['albumId' => $album->id])}}">{{$album->title}}</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="pt-e-5 pt-e-lg-10"></div>
            </div>
        </div>
    </div>
@endsection
