@extends('layouts.client.main')

@section('title')
    Bảng xếp hạng
@endsection

@section('content')
    <div class="pt-4 pt-lg-5"></div>
    <div class="master-container-fluid">
        <div class="title-box">
            <h4 class="title h3 text-uppercase">Bảng xếp hạng</h4>
        </div>
        <section>
            <div class="adonis-carousel js-effect adonis-animate" data-animation="slideUp"
                 data-animation-item=".item"
                 data-dots="yes" data-auto-width="yes" data-responsive-width="0:100%|600:50%|900:33.33%">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">
                        <div class="item">
                            <div class="img-box-text-over lg box-rounded-lg">
                                <img src="client/images/radios/radios-6.jpg"
                                     data-2x="client/images/radios/radios-6@2x.jpg"
                                     alt="">
                                <div class="absolute-info d-flex flex-column justify-content-between">
                                    <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h5 text-light">ALBUM NGHE NHIỀU TRONG TUẦN
                                    </div>
                                    <div>
                                        <h4 class="fs-7 m-0 text-light text-center"><span
                                                class="font-weight-bold">Album</span><br>
                                            <em><span class="font-weight-light">Album Của Tuần</span> </em>
                                        </h4>
                                    </div>
                                    <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto"><a href="{{route('topAlbums')}}"
                                                                                      class="color-white">Xem tất
                                            cả<span
                                                class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                        xlink:href="#icon-see-all-arrow-right"></use></svg></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box-text-over lg box-rounded-lg">
                                <img src="client/images/radios/radios-7.jpg"
                                     data-2x="client/images/radios/radios-7@2x.jpg"
                                     alt="">
                                <div class="absolute-info d-flex flex-column justify-content-between">
                                    <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h5 text-light">TOP 10 BÀI HÁT TRONG TUẦN
                                    </div>
                                    <div>
                                        <h4 class="fs-7 m-0 text-center text-light"><span
                                                class="text-light font-weight-bold">Bài Hát</span><br>
                                            <em><span class="font-weight-light">Top Bài Hát Của Tuần</span>
                                            </em></h4>
                                    </div>
                                    <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto"><a href="{{route('weeklyTopTen')}}"
                                                                                      class="color-white">View
                                            all<span
                                                class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                        xlink:href="#icon-see-all-arrow-right"></use></svg></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box-text-over lg box-rounded-lg">
                                <img src="client/images/radios/radios-8.jpg"
                                     data-2x="client/images/radios/radios-8@2x.jpg"
                                     alt="">

                                <div class="absolute-info d-flex flex-column justify-content-between">
                                    <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h5 text-light">TOP CA SĨ</div>
                                    <div>
                                        <h4 class="fs-7 m-0 text-dark text-center"><span
                                                class="text-light font-weight-bold">Ca Sĩ</span><br>
                                            <em><span
                                                    class="font-weight-light text-light">Top Ca Sĩ Quan Tâm Nhiều Nhất</span>
                                            </em></h4>
                                    </div>
                                    <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto"><a href="{{route('topArtists')}}"
                                                                                      class="color-white">Xem tất
                                            cả<span
                                                class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                        xlink:href="#icon-see-all-arrow-right"></use></svg></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </section>
        <section>
            <div class="title-box">
                <h4 class="title h3">Top Songs</h4>
            </div>
            <div class="adonis-carousel music-img-box-cont-sm adonis-animate" data-animation="slideUp"
                 data-animation-item=".item" data-auto-width="no" data-loop="no" data-dots="yes"
                 data-items-responsive="0:1|600:2|900:3|1200:4|1500:5">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">
                        <div class="item">
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-1.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">The Separation</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-2.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Country girl shake it for me</a></h6>
                                    <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-3.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Stirring of a fool</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-4.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Nothings into Somethings</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-5.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Let You Down</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-6.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Nothings into Somethings</a></h6>
                                    <p class="sub-title"><a href="#">Sam Hunt</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-7.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">O Come, All Ye Faithful</a></h6>
                                    <p class="sub-title"><a href="#">Kesha</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-8.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Fetty Wap Ft Monty</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-9.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Do You Hear What I Hear</a></h6>
                                    <p class="sub-title"><a href="#">Band Aid</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-10.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Look What You Made Me Do</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-11.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Carol of the Bells</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-12.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Carol of the Bells</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-13.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">You're A Mean One, Mr. Grinch</a></h6>
                                    <p class="sub-title"><a href="#">Darius Rucker</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-14.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Joy To The World</a></h6>
                                    <p class="sub-title"><a href="#">Pentatonix</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-15.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Something Just Like This</a></h6>
                                    <p class="sub-title"><a href="#">Demi Lovato</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-1.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">The Separation</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-2.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Country girl shake it for me</a></h6>
                                    <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-3.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Stirring of a fool</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-4.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Nothings into Somethings</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-5.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Let You Down</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-1.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">The Separation</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-2.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Country girl shake it for me</a></h6>
                                    <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-3.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Stirring of a fool</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-4.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Nothings into Somethings</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                <div class="img-box img-box-sm box-rounded-sm">
                                    <img src="client/images/hot-song/hot-5.jpg" alt="">
                                </div>
                                <div class="des">
                                    <h6 class="title"><a href="#">Let You Down</a></h6>
                                    <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                </div>
                                <div class="hover-state d-flex justify-content-between align-items-center">
                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                        class="play-icon"></i></span>
                                    <div class="d-flex align-items-center">
                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                                        <span class="pointer dropdown-menu-toggle"><span
                                                class="icon-dot-nav-horizontal text-light"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </section>
        <section>
            <div class="title-box">
                <h4 class="title h3">Top Albums</h4>
            </div>
            <div class="adonis-carousel viewport-animate" data-animation="slideUp"
                 data-animation-item=".item" data-dots="yes"
                 data-items="7" data-items-responsive="0:1|300:2|900:4|1200:5|1600:7">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-1.jpg"
                                         data-2x="client/images/new-releases/new-releases-1@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-2.jpg"
                                         data-2x="client/images/new-releases/new-releases-2@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-3.jpg"
                                         data-2x="client/images/new-releases/new-releases-3@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-4.jpg"
                                         data-2x="client/images/new-releases/new-releases-4@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-5.jpg"
                                         data-2x="client/images/new-releases/new-releases-5@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-6.jpg"
                                         data-2x="client/images/new-releases/new-releases-6@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-7.jpg"
                                         data-2x="client/images/new-releases/new-releases-7@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-8.jpg"
                                         data-2x="client/images/new-releases/new-releases-8@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>

                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-9.jpg"
                                         data-2x="client/images/new-releases/new-releases-9@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-10.jpg"
                                         data-2x="client/images/new-releases/new-releases-10@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-11.jpg"
                                         data-2x="client/images/new-releases/new-releases-11@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </section>
        <section>
            <div class="title-box">
                <h4 class="title h3">Top Videos</h4>
            </div>
            <div class="adonis-carousel viewport-animate" data-animation="slideUp"
                 data-animation-item=".item" data-dots="yes"
                 data-items="7" data-items-responsive="0:1|600:2|900:3|1200:4|1600:5">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-1.jpg"
                                         data-2x="client/images/videos/videos-1@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-2.jpg"
                                         data-2x="client/images/videos/videos-2@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-3.jpg"
                                         data-2x="client/images/videos/videos-3@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-4.jpg"
                                         data-2x="client/images/videos/videos-4@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-5.jpg"
                                         data-2x="client/images/videos/videos-5@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-6.jpg"
                                         data-2x="client/images/videos/videos-6@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-1.jpg"
                                         data-2x="client/images/videos/videos-1@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-2.jpg"
                                         data-2x="client/images/videos/videos-2@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/videos/videos-3.jpg"
                                         data-2x="client/images/videos/videos-3@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-20 pb-e-20">
                                    <span class="mr-2"><span class="adonis-icon text-light pointer icon-2x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-heart-blank"></use></svg></span></span>
                                            <span class="pointer dropdown-menu-toggle"><span
                                                    class="adonis-icon icon-4x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </section>
        <section>
            <div class="title-box">
                <h4 class="title h3">Featured Playlists</h4>
            </div>
            <div class="adonis-carousel viewport-animate auto-fit-columns" data-auto-fit-items=".item"
                 data-item-parent=".owl-carousel" data-item-width="180" data-item-max-width="360"
                 data-animation="slideUp"
                 data-animation-item=".item" data-dots="yes" data-auto-width="yes">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-12.jpg"
                                         data-2x="client/images/new-releases/new-releases-12@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-13.jpg"
                                         data-2x="client/images/new-releases/new-releases-13@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-14.jpg"
                                         data-2x="client/images/new-releases/new-releases-14@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-15.jpg"
                                         data-2x="client/images/new-releases/new-releases-15@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-16.jpg"
                                         data-2x="client/images/new-releases/new-releases-16@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-17.jpg"
                                         data-2x="client/images/new-releases/new-releases-17@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-18.jpg"
                                         data-2x="client/images/new-releases/new-releases-18@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-19.jpg"
                                         data-2x="client/images/new-releases/new-releases-19@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>

                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-20.jpg"
                                         data-2x="client/images/new-releases/new-releases-20@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-21.jpg"
                                         data-2x="client/images/new-releases/new-releases-21@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-md">
                                    <img class="retina" src="client/images/new-releases/new-releases-22.jpg"
                                         data-2x="client/images/new-releases/new-releases-22@2x.jpg" alt="">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                        <span class="pointer play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                    <span class="pointer dropdown-menu-toggle"><span class="adonis-icon icon-4x"><svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

