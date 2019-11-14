@extends('layouts.client.main')

@section('title')
    Trang chủ
@endsection

@section('content')
    <main id="main">
        <div class="pt-4 pt-lg-5"></div>
        <div class="master-container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-12">
                    <div class="adonis-carousel" data-items="1" data-stagePadding="0"
                         data-loop="no">
                        <div class="owl-carousel owl-theme-adonis">
                            <img src="https://photo-zmp3.zadn.vn/banner/e/1/8/1/e181d0a10cd0e354d6c60723e8c0d374.jpg"
                                 alt=""
                                 class="img-fluid">
                            <img src="https://photo-zmp3.zadn.vn/banner/5/9/3/c/593c1fdb62e63c32e1b9da240ba663e4.jpg"
                                 alt=""
                                 class="img-fluid">
                            <img src="https://photo-zmp3.zadn.vn/banner/b/e/0/8/be08de5a9a48c60ae7d58a897a75eecf.jpg"
                                 alt=""
                                 class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-1 mb-3 pb-xl-4 mb-xl-4"></div>

            <hr>

            <div class="pb-1 mb-3 pb-xl-5 mb-xl-1"></div>

            <section>
                <div class="d-flex">
                    <div class="title-box">
                        <h2 class="title h3-md">Có Thể Bạn Muốn Nghe</h2>
                    </div>
                </div>
                <div class="adonis-carousel music-img-box-cont-sm viewport-animate"
                     data-animation="slideUp" data-animation-item=".item" data-dots="yes"
                     data-auto-width="yes"
                     data-responsive-width="0:50%|400:33.33%|600:25%|800:20%|1000:16.667%|1200:14.285%|1400:12.5%|1600:10%">
                    <div class="gutter-30">
                        <div class="owl-carousel owl-theme-adonis">
                            @foreach($randomSong as $song)
                                <div class="item">
                                    <div class="music-img-box">
                                        <div class="img-box box-rounded-md img-box-md">
                                            <img class="retina"
                                                 src="{{$song->cover_image}}"
                                                 data-2x="{{$song->cover_image}}"
                                                 alt="{{$song->name}}">
                                            <div class="hover-state">
                                                <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span
                                                                    class="pointer play-btn-dark round-btn adonis-album-button"
                                                                    data-type="song" data-album-id="{{$song->id}}"><i
                                                                        class="play-icon"></i></span>
                                                </div>
                                                <div class="absolute-top-right pr-e-15 pt-e-15">
                                                                <span class="pointer dropdown-menu-toggle"><span
                                                                        class="adonis-icon icon-4x"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
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
                <div class="pt-e-20 pt-e-lg-40"></div>
            </section>

            <section>
                <div class="row">
                    <div class="col-xxl-7 col-lg-8">
                        <div class="d-flex flex-row">
                            <div class="title-box">
                                <h2 class="title h3-md">Bài Hát Mới</h2>
                            </div>
                            <div class="button-right ml-auto ml-auto mt-auto mb-4 d-flex">
                                <a href="#">Xem tất cả <span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                            </div>
                        </div>
                        <div class="adonis-carousel music-img-box-cont-sm viewport-animate"
                             data-animation="slideUp" data-animation-item=".item" data-auto-width="yes"
                             data-loop="no" data-dots="yes"
                             data-responsive-width="0:100%|600:50%|900:33.33%|1200:25%">
                            <div class="gutter-30">
                                <div class="owl-carousel owl-theme-adonis">
                                    <div class="item">
                                        <?php
                                        $count_loop = 0;
                                        $html = '</div><div class="item">';
                                        ?>
                                        @foreach($latestSongs as $song)
                                            <?php $count_loop++ ?>
                                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                <div class="img-box img-box-sm box-rounded-sm">
                                                    <img src="{{$song->cover_image}}" alt="{{$song->name}}">
                                                </div>
                                                <div class="des">
                                                    <h6 class="title fs-2"><a
                                                            href="{{route('singleSong', ['songId' => $song->id])}}">{{$song->name}}</a>
                                                    </h6>
                                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                </div>
                                                <div
                                                    class="hover-state d-flex justify-content-between align-items-center">
                                                                <span
                                                                    class="pointer play-btn-dark box-rounded-sm adonis-album-button"
                                                                    data-type="song"
                                                                    data-album-id="{{$song->id}}"><i
                                                                        class="play-icon"></i></span>
                                                    <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                        <span class="pointer dropdown-menu-toggle"><span
                                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($count_loop % 5==0)
                                                {!!$html!!}
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-e-20 pt-e-lg-40"></div>
                    </div>
                    <div class="col-xxl-5 col-lg-4">
                        <div class="title pb-e-15">
                            <h2 class="title h3-md">Album Nghe Nhiều Nhất</h2>
                        </div>
                        <div class="music-img-box">
                            <div class="img-box box-rounded-md">
                                <img src="{{$mostViewAlbum->cover_image}}" alt="{{$mostViewAlbum->name}}" height="351">
                            </div>
                            <div class="hover-state show">
                                <div
                                    class="absolute-top pl-e-15 pr-e-15 pt-e-15 pl-e-md-30 pr-e-md-30 pt-e-md-30">
                                    <h6 class="album-name text-light">{{$mostViewAlbum->title}}</h6>
                                </div>
                                <div
                                    class="absolute-bottom pl-e-15 pr-e-15 pb-e-md-15  pl-e-md-30 pr-e-30 pb-e-md-30 d-flex">
                                    <div>
                                        <a href="{{route('singleAlbum', ['albumId' => $mostViewAlbum->id])}}"><h5
                                                class="album-title text-light">{{$mostViewAlbum->title}}</h5></a>
                                        <a href="#"><h6 class="artist-name text-light">David Jame</h6>
                                        </a>
                                    </div>
                                    <div class="ml-auto">
                                                        <span
                                                            class="pointer play-btn-dark play-btn-dark round-btn adonis-album-button"
                                                            data-type="album" data-album-id="{{$mostViewAlbum->id}}"><i
                                                                class="play-icon"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-e-30 pt-e-lg-40"></div>
                    </div>
                </div>
            </section>

            <section class="viewport-animate" data-animation="slideUp" data-animation-item=".col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-row">
                            <div class="title-box">
                                <h2 class="title h3-md">Bảng Xếp Hạng</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-box-text-over lg box-rounded-lg mb-4">
                            <img src="client/images/this-week/popular-album-week.jpg"
                                 data-2x="client/images/this-week/popular-album-week@2x.jpg" alt="">
                            <div class="hover-state show">
                                <div class="absolute-top-left pl-e-percent-10 pt-e-percent-8">
                                    <h6 class="text-light">BẢNG XẾP HẠNG BÀI HÁT</h6>
                                </div>
                                <div class="absolute-bottom-right pr-e-percent-8 pb-e-percent-8">
                                    <a href="#" class="text-light"><i class="icon-arrow-right2"></i>
                                        Xem<span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-box-text-over lg  box-rounded-lg mb-4">
                            <img src="client/images/this-week/new-songs-week.jpg"
                                 data-2x="client/images/this-week/new-songs-week@2x.jpg" alt="">
                            <div class="hover-state show">
                                <div class="absolute-top-left pl-e-percent-10 pt-e-percent-8">
                                    <h6 class="text-light">BẢNG XẾP HẠNG ALBUM</h6>
                                </div>
                                <div class="absolute-bottom-right pr-e-percent-8 pb-e-percent-8">
                                    <a href="#" class="text-light"><i class="icon-arrow-right2"></i>
                                        Xem<span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-box-text-over lg box-rounded-lg mb-4">
                            <img src="client/images/this-week/popular-artists-week.jpg"
                                 data-2x="client/images/this-week/popular-artists-week@2x.jpg"
                                 alt="">
                            <div class="hover-state show">
                                <div class="absolute-top-left pl-e-percent-10 pt-e-percent-8">
                                    <h6 class="text-light">BẢNG XẾP HẠNG CA SĨ</h6>
                                </div>
                                <div class="absolute-bottom-right pr-e-percent-8 pb-e-percent-8">
                                    <a href="#" class="text-light"><i class="icon-arrow-right2"></i>
                                        Xem<span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-xl-5 pb-4"></div>
            </section>

            <section>
                <div class="d-flex">
                    <div class="title-box">
                        <h2 class="title h3-md">Thể Loại</h2>
                    </div>
                    <div class="button-right ml-auto ml-auto d-flex align-items-end">
                        <a href="#" class="mb-4">Xem tất cả<span
                                class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                        xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                    </div>
                </div>
                <div class="adonis-carousel viewport-animate" data-animation="slideUp"
                     data-animation-item=".owl-item.active" data-dots="yes" data-auto-width="yes"
                     data-responsive-width="0:100%|500:50%|730:33.33%|1100:25%|1460:20%">
                    <div class="gutter-30">
                        <div class="owl-carousel owl-theme-adonis">
                            @foreach($allGenres as $genres)
                                <div class="item">
                                    <div class="img-box-text-over lg box-rounded-lg">
                                        <img src="{{$genres->image}}"
                                             data-2x="{{$genres->image}}" alt="{{$genres->name}}" height="155">
                                        <div
                                            class="absolute-info d-flex flex-column justify-content-between">
                                            <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h5 text-light">Thể Loại
                                            </div>
                                            <div>
                                                <h4 class="fs-7 m-0 text-light text-center"><span
                                                        class="font-weight-bold">{{$genres->name}}</span>
                                                </h4>
                                            </div>
                                            <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto">
                                                <a href="{{route('singleGenres', ['genresId' => $genres->id])}}"
                                                   class="color-white">Xem thể loại<span
                                                        class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"/></svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="d-flex">
                    <div class="title-box">
                        <h2 class="title h3-md">Album Mới</h2>
                    </div>
                    <div class="button-right ml-auto ml-auto d-flex align-items-end">
                        <a href="#" class="mb-4">Xem tất cả<span
                                class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                        xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                    </div>
                </div>
                <div class="adonis-carousel viewport-animate" data-animation="slideUp"
                     data-animation-item=".owl-item.active" data-dots="yes" data-auto-width="yes"
                     data-responsive-width="0:100%|300:50%|560:33%|820:25%|980:20%|1240:16.66%">
                    <div class="gutter-30">
                        <div class="owl-carousel owl-theme-adonis">
                            @foreach($latestAbums as $album)

                                <div class="item">
                                    <div class="music-img-box">
                                        <div class="img-box box-rounded-md">
                                            <img class="retina"
                                                 src="{{url($album->cover_image)}}"
                                                 data-2x="{{url($album->cover_image)}}"
                                                 alt="{{$album->title}}">
                                            <div class="hover-state">
                                                <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span
                                                                    class="pointer play-btn-dark round-btn adonis-album-button"
                                                                    data-album-id="{{$album->id}}" data-type="album"><i
                                                                        class="play-icon"></i></span>
                                                </div>
                                                <div class="absolute-top-right pr-e-20 pt-e-20">
                                                                <span class="pointer dropdown-menu-toggle"><span
                                                                        class="adonis-icon icon-4x"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="title"><a
                                                href="{{route('singleAlbum', ['albumId' => $album->id])}}">{{$album->title}}</a>
                                        </h6>
                                        <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="pt-e-20 pt-e-lg-40"></div>
            </section>

            <section>
                <div class="d-flex flex-row">
                    <div class="title-box">
                        <h2 class="title h3-md">Danh sách phát mới</h2>
                    </div>
                    <div class="button-right ml-auto ml-auto mt-auto mb-4 d-flex">
                        <a href="#">Xem tất cả <span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                        xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="playlist-item-wrapper mb-md-2">
                            <div class="card-170">
                                <a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">
                                    <div class="image lazyload-img loaded"><img
                                            src="https://photo-playlist-zmp3.zadn.vn/playlist-photo?&amp;link1=avatars/2/e/8/6/2e86030cf71aa174524828a05ac17c78.jpg&amp;text1=G%C3%B3c+Nh%E1%BA%A1c&amp;text2=OSAD&amp;type=mixartist&amp;ver=2">
                                    </div>
                                    <div class="opac"></div>
                                </a>
                            </div>
                            <div class="playlist-info ">
                                <div class="title"><a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">Mix
                                        bài hát hay nhất của OSAD</a></div>
                                <i>16 bài hát</i></div>
                            <div class="z-mix-list">
                                <div class="list-trend">
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal mb-0 music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="playlist-item-wrapper mb-md-2">
                            <div class="card-170">
                                <a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">
                                    <div class="image lazyload-img loaded"><img
                                            src="https://photo-playlist-zmp3.zadn.vn/playlist-photo?&amp;link1=avatars/2/e/8/6/2e86030cf71aa174524828a05ac17c78.jpg&amp;text1=G%C3%B3c+Nh%E1%BA%A1c&amp;text2=OSAD&amp;type=mixartist&amp;ver=2">
                                    </div>
                                    <div class="opac"></div>
                                </a>
                            </div>
                            <div class="playlist-info ">
                                <div class="title"><a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">Mix
                                        bài hát hay nhất của OSAD</a></div>
                                <i>16 bài hát</i></div>
                            <div class="z-mix-list">
                                <div class="list-trend">
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal mb-0 music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="playlist-item-wrapper mb-md-2">
                            <div class="card-170">
                                <a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">
                                    <div class="image lazyload-img loaded"><img
                                            src="https://photo-playlist-zmp3.zadn.vn/playlist-photo?&amp;link1=avatars/2/e/8/6/2e86030cf71aa174524828a05ac17c78.jpg&amp;text1=G%C3%B3c+Nh%E1%BA%A1c&amp;text2=OSAD&amp;type=mixartist&amp;ver=2">
                                    </div>
                                    <div class="opac"></div>
                                </a>
                            </div>
                            <div class="playlist-info ">
                                <div class="title"><a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">Mix
                                        bài hát hay nhất của OSAD</a></div>
                                <i>16 bài hát</i></div>
                            <div class="z-mix-list">
                                <div class="list-trend">
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal mb-0 music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="playlist-item-wrapper mb-md-2">
                            <div class="card-170">
                                <a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">
                                    <div class="image lazyload-img loaded"><img
                                            src="https://photo-playlist-zmp3.zadn.vn/playlist-photo?&amp;link1=avatars/2/e/8/6/2e86030cf71aa174524828a05ac17c78.jpg&amp;text1=G%C3%B3c+Nh%E1%BA%A1c&amp;text2=OSAD&amp;type=mixartist&amp;ver=2">
                                    </div>
                                    <div class="opac"></div>
                                </a>
                            </div>
                            <div class="playlist-info ">
                                <div class="title"><a href="/album/Goc-nhac-OSAD-OSAD/Z6BOFOBI.html">Mix
                                        bài hát hay nhất của OSAD</a></div>
                                <i>16 bài hát</i></div>
                            <div class="z-mix-list">
                                <div class="list-trend">
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img-box-horizontal mb-0 music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="client/images/hot-song/hot-1.jpg" alt="">
                                        </div>
                                        <div class="des">
                                            <h6 class="title fs-2"><a href="#">123</a>
                                            </h6>
                                            <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                        </div>
                                        <div
                                            class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon play-song"
                                                                        data-song-id="1"></i></span>
                                            <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x "><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
                                                <span class="pointer dropdown-menu-toggle"><span
                                                        class="icon-dot-nav-horizontal text-light"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="pt-e-20 pt-e-lg-40"></div>
            </section>

            <section>
                <div class="d-flex flex-row">
                    <div class="title-box">
                        <h2 class="title h3-md">Ca Sĩ Nổi Bật</h2>
                    </div>
                    <div class="button-right ml-auto ml-auto mt-auto mb-4 d-flex">
                        <a href="#">Xem tất cả<span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                        xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                    </div>
                </div>

                <div class="row auto-columns adonis-animate" data-animation="slideRightSkew"
                     data-animation-item=".music-img-box"
                     data-responsive-width="0:100%|300:50%|560:33%|820:25%|980:20%|1240:16.66%|1500:14.2858%"
                     style="opacity: 1;">
                    <div class="col-auto" style="width: 253.44px;">
                        <div class="music-img-box mb-e-30 mb-e-md-40"
                             style="opacity: 1; transform: translateX(0px) rotateZ(0deg);">
                            <div class="img-box rounded-circle">
                                <img class="retina" src="client/images/new-releases/new-releases-33.jpg"
                                     data-2x="../assets/images/new-releases/new-releases-33@2x.jpg" alt="">
                            </div>
                            <div class="desc top-sm text-center">
                                <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                <p class="sub-title"><a href="#">3 Songs</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto" style="width: 253.44px;">
                        <div class="music-img-box mb-e-30 mb-e-md-40"
                             style="opacity: 1; transform: translateX(0px) rotateZ(0deg);">
                            <div class="img-box rounded-circle">
                                <img class="retina" src="client/images/new-releases/new-releases-28.jpg"
                                     data-2x="../assets/images/new-releases/new-releases-28@2x.jpg" alt="">
                            </div>
                            <div class="desc top-sm text-center">
                                <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                <p class="sub-title"><a href="#">3 Songs</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto" style="width: 253.44px;">
                        <div class="music-img-box mb-e-30 mb-e-md-40"
                             style="opacity: 1; transform: translateX(0px) rotateZ(0deg);">
                            <div class="img-box rounded-circle">
                                <img class="retina" src="client/images/new-releases/new-releases-15.jpg"
                                     data-2x="../assets/images/new-releases/new-releases-15@2x.jpg" alt="">
                            </div>
                            <div class="desc top-sm text-center">
                                <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                <p class="sub-title"><a href="#">3 Songs</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto" style="width: 253.44px;">
                        <div class="music-img-box mb-e-30 mb-e-md-40"
                             style="opacity: 1; transform: translateX(0px) rotateZ(0deg);">
                            <div class="img-box rounded-circle">
                                <img class="retina" src="client/images/new-releases/new-releases-16.jpg"
                                     data-2x="../assets/images/new-releases/new-releases-16@2x.jpg" alt="">
                            </div>
                            <div class="desc top-sm text-center">
                                <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                <p class="sub-title"><a href="#">3 Songs</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto" style="width: 253.44px;">
                        <div class="music-img-box mb-e-30 mb-e-md-40"
                             style="opacity: 1; transform: translateX(0px) rotateZ(0deg);">
                            <div class="img-box rounded-circle">
                                <img class="retina" src="client/images/new-releases/new-releases-41.jpg"
                                     data-2x="../assets/images/new-releases/new-releases-41@2x.jpg" alt="">
                            </div>
                            <div class="desc top-sm text-center">
                                <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                <p class="sub-title"><a href="#">3 Songs</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto" style="width: 253.44px;">
                        <div class="music-img-box mb-e-30 mb-e-md-40"
                             style="opacity: 1; transform: translateX(0px) rotateZ(0deg);">
                            <div class="img-box rounded-circle">
                                <img class="retina" src="client/images/new-releases/new-releases-25.jpg"
                                     data-2x="../assets/images/new-releases/new-releases-25@2x.jpg" alt="">
                            </div>
                            <div class="desc top-sm text-center">
                                <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                <p class="sub-title"><a href="#">3 Songs</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="pt-e-20 pt-e-lg-40"></div>
        </div>
    </main>
@endsection
