@extends('layouts.client.main')

@section('title')
    Thư viện
@endsection

@section('content')
    <main id="main">
        <div class="pt-4 pt-lg-5"></div>
        <div class="master-container-fluid">
            <div class="mb-e-30 mb-e-lg-50">
                <div class="mt-auto mb-3">
                    <div class="tabs tab-style-1 scroll-x ps">
                        <ul class="nav nav-border js-parent adonis-tabbed-nav moving-border">
                            <li class="nav-item active">
                                <a class="nav-link adonis-ajax-load loaded active m-item m-item-block" href="#"
                                   data-target=".library-overview">
                                            <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 16 15"><defs></defs><g
                                                        data-name="Layer 2"><g id="overviews_icon"
                                                                               data-name="overviews icon" class="cls-1"><g
                                                                id="overviews_icon-2" data-name="overviews icon"><path
                                                                    class="cls-2"
                                                                    d="M16,1.4A1.43,1.43,0,0,0,14.55,0l-8,.7a1.43,1.43,0,0,0-1.45,1.4v7h0v2.78h0a2,2,0,0,1,0,.38,2.14,2.14,0,0,1-2.19,2.09,2.1,2.1,0,1,1,0-4.19,2.25,2.25,0,0,1,.72.13v-.13h0a.34.34,0,0,0,0-.69h0a.33.33,0,0,0-.18.06,2.75,2.75,0,0,0-.54-.06A2.85,2.85,0,0,0,0,12.22,2.85,2.85,0,0,0,2.91,15a2.85,2.85,0,0,0,2.91-2.78s0,0,0-.06h0V2.09a.71.71,0,0,1,.73-.7l8-.7a.71.71,0,0,1,.73.7v7h0v2.78h0a2,2,0,0,1,0,.36,2.19,2.19,0,1,1-2.19-2.08,2.27,2.27,0,0,1,.72.12V9.44h0a.36.36,0,0,0,.36-.36h0a.36.36,0,0,0-.36-.36h0a.35.35,0,0,0-.18.06,2.72,2.72,0,0,0-.52-.06A2.8,2.8,0,1,0,16,11.52h0Z"></path></g></g></g></svg></span>
                                    <span>Tổng quan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link adonis-ajax-load loaded m-item m-item-block" href="#"
                                   data-target="#library-songs" data-content="parts/library/songs.html">
                                            <span class="adonis-icon pr-3 icon-1x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    viewBox="0 0 12.29 16.21"><defs><style>.cls-1 {
                                                                isolation: isolate
                                                            }

                                                            .cls-2 {
                                                                fill-rule: evenodd
                                                            }</style></defs><g data-name="Layer 2"><g
                                                            id="new_music_icon"
                                                            data-name="new music icon"
                                                            class="cls-1"><g
                                                                id="new_music_icon-2" data-name="new music icon"><path
                                                                    class="cls-2"
                                                                    d="M6.37,16.21l.12,0H6.37ZM6.58.08h0L6.37,0V0h0a.4.4,0,0,0-.4.4V10.5a3.4,3.4,0,1,0,.81,2.91.39.39,0,0,0,.07-.21V1.12a7.6,7.6,0,0,1,3.26,2.74.39.39,0,0,0-.17,0,.4.4,0,1,0,.55.15l0,0,.63-.31A8.51,8.51,0,0,0,6.58.08ZM3.37,15.36a2.56,2.56,0,1,1,2.56-2.56A2.56,2.56,0,0,1,3.37,15.36ZM11.31,4.14V7c0,.23.08.46.09.7h.89A8.41,8.41,0,0,0,11.31,4.14Z"></path></g></g></g></svg></span>
                                    <span>Bài hát đã thích</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link adonis-ajax-load loaded m-item m-item-block" href="#"
                                   data-target="#browse-new-playlist">
                                            <span class="adonis-icon pr-3 icon-3x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    viewBox="0 0 17.98 17.17"><defs><style>.cls-1 {
                                                                isolation: isolate
                                                            }

                                                            .cls-2 {
                                                                fill-rule: evenodd
                                                            }</style></defs><g data-name="Layer 2"><g id="playlist_icon"
                                                                                                      data-name="playlist icon"
                                                                                                      class="cls-1"><g
                                                                id="playlist_icon-2" data-name="playlist icon"><path
                                                                    class="cls-2"
                                                                    d="M.42.93A.44.44,0,0,0,0,1.38a.44.44,0,0,0,.42.45.44.44,0,0,0,.42-.45A.44.44,0,0,0,.42.93Zm0,5.41a.45.45,0,0,0,0,.91.45.45,0,0,0,0-.91Zm1.31.91H9.39a.45.45,0,0,0,.45-.45h0a.45.45,0,0,0-.45-.45H1.73a.45.45,0,0,0-.45.45h0A.45.45,0,0,0,1.73,7.24Zm0-5.41H9.39a.45.45,0,0,0,.45-.45h0A.45.45,0,0,0,9.39.93H1.73a.45.45,0,0,0-.45.45h0A.45.45,0,0,0,1.73,1.84ZM18,8.13h0Zm-.9-3.54,0,0h0A8.74,8.74,0,0,0,12.25.1.42.42,0,0,0,12.09,0L12,0V0h0a.43.43,0,0,0-.43.43v10.7A3.35,3.35,0,0,0,9,9.93a3.53,3.53,0,0,0-3.44,3.61A3.53,3.53,0,0,0,9,17.15a3.48,3.48,0,0,0,3.37-2.93.42.42,0,0,0,.06-.21V1.16A7.89,7.89,0,0,1,16.31,5h0a.44.44,0,0,0,0,.08.42.42,0,0,0,.59.16A.46.46,0,0,0,17.09,4.6ZM9,16.24a2.64,2.64,0,0,1-2.56-2.7A2.64,2.64,0,0,1,9,10.84a2.64,2.64,0,0,1,2.56,2.7A2.64,2.64,0,0,1,9,16.24Zm-4.73-4.5H1.73a.45.45,0,0,0-.45.45h0a.45.45,0,0,0,.45.45H4.27a.45.45,0,0,0,.45-.45h0A.45.45,0,0,0,4.27,11.74ZM12,17.17l.06,0H12ZM.42,11.74a.45.45,0,0,0,0,.91.45.45,0,0,0,0-.91Z"></path></g></g></g></svg></span>
                                    <span>Playlist</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link adonis-ajax-load loaded m-item m-item-block" href="#"
                                   data-target="#library-artists">
                                            <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 20 20"><title>artist</title><path
                                                        d="M15.75 8l-3.74-3.75c-0.006-0.083-0.010-0.18-0.010-0.277 0-2.204 1.786-3.99 3.99-3.99 1.111 0 2.116 0.454 2.839 1.187l0 0c0.73 0.725 1.182 1.729 1.182 2.839 0 2.209-1.791 4-4 4-0.092 0-0.183-0.003-0.274-0.009l0.012 0.001zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zM0.45 18.13l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"></path></svg></span>
                                    <span>Ca sĩ quan tâm</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link adonis-ajax-load loaded m-item m-item-block" href="#"
                                   data-target="#library-upload">
                                            <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 39 32"><path
                                                        d="M22.856 0h-6.856c-8.837 0-16 7.163-16 16s7.163 16 16 16v0h6.856c8.837 0 16-7.163 16-16s-7.163-16-16-16v0zM22.816 30.4h-6.776c-7.953 0-14.4-6.447-14.4-14.4v0 0c0-7.953 6.447-14.4 14.4-14.4v0h6.776c7.953 0 14.4 6.447 14.4 14.4v0 0c0 7.953-6.447 14.4-14.4 14.4v0zM26.64 16.496s0-0.064 0-0.096v-0.040l-0.104-0.112-0.12-0.112-9.728-5.6c-0.113-0.064-0.247-0.102-0.391-0.102-0.223 0-0.424 0.091-0.569 0.238l-0 0-0.072 0.088s-0.048 0.040-0.064 0.072 0 0 0 0.048c-0.068 0.112-0.109 0.247-0.112 0.391v11.129c0 0.442 0.358 0.8 0.8 0.8v0 0c0.166-0.006 0.318-0.062 0.442-0.154l-0.002 0.002 9.68-5.6 0.12-0.112c0.038-0.036 0.072-0.075 0.102-0.118l0.002-0.002s0 0 0 0 0-0.064 0-0.096c0.019-0.043 0.035-0.094 0.047-0.146l0.001-0.006c0.004-0.023 0.006-0.049 0.006-0.076s-0.002-0.053-0.006-0.079l0 0.003c0.004-0.023 0.006-0.049 0.006-0.076s-0.002-0.053-0.006-0.079l0 0.003c-0.006-0.062-0.017-0.119-0.034-0.174l0.002 0.006zM17.040 21.008v-8.416l7.264 4.208z"></path></svg></span>
                                    <span>Nhạc tải lên</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link adonis-ajax-load loaded m-item m-item-block" href="#"
                                   data-target="#library-recently-played">
                                            <span class="adonis-icon pr-3 icon-2x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                        xlink:href="#icon-heart-blank"/></svg></span>
                                    <span>Recently Played</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link adonis-ajax-load loaded m-item m-item-block" href="#"
                                   data-target="#library-purchased">
                                            <span class="adonis-icon pr-3 icon-4x"><svg fill="#000000"
                                                                                        viewBox="0 0 24 24"
                                                                                        xmlns="http://www.w3.org/2000/svg"><path
                                                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"></path><path
                                                        d="M0 0h24v24H0z" fill="none"></path></svg></span>
                                    <span>Purchased</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="border-hr">
                    </div>
                </div>
            </div>
        </div>

        <div class="master-container-fluid">
            <div class="tabs-content">
                <div class="library-overview inactive-hide active">
                    <section>
                        <div class="d-flex flex-row">
                            <div class="title-box">
                                <h2 class="title h3-md">Albums</h2>
                            </div>
                        </div>
                        <div class="adonis-carousel auto-fit-columns adonis-animate" data-animation="slideUp"
                             data-animation-item=".item" data-auto-width="yes" data-item-parent=".owl-carousel"
                             data-auto-fit-items=".item" data-dots="yes" data-item-width="270"
                             data-item-max-width="280">
                            <div class="gutter-30">
                                <div class="owl-carousel owl-theme-adonis">
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-1.jpg"
                                                     data-2x="client/images/new-releases/new-releases-1@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-2.jpg"
                                                     data-2x="client/images/new-releases/new-releases-2@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-3.jpg"
                                                     data-2x="client/images/new-releases/new-releases-3@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-4.jpg"
                                                     data-2x="client/images/new-releases/new-releases-4@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-5.jpg"
                                                     data-2x="client/images/new-releases/new-releases-5@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-6.jpg"
                                                     data-2x="client/images/new-releases/new-releases-6@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-7.jpg"
                                                     data-2x="client/images/new-releases/new-releases-7@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-8.jpg"
                                                     data-2x="client/images/new-releases/new-releases-8@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-9.jpg"
                                                     data-2x="client/images/new-releases/new-releases-9@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-10.jpg"
                                                     data-2x="client/images/new-releases/new-releases-10@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-11.jpg"
                                                     data-2x="client/images/new-releases/new-releases-11@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-12.jpg"
                                                     data-2x="client/images/new-releases/new-releases-12@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-13.jpg"
                                                     data-2x="client/images/new-releases/new-releases-13@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina"
                                                     src="client/images/new-releases/new-releases-14.jpg"
                                                     data-2x="client/images/new-releases/new-releases-14@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                        <div class="d-flex flex-row">
                            <div class="title-box">
                                <h2 class="title h3-md">Songs</h2>
                            </div>
                        </div>
                        <div class="adonis-carousel music-img-box-cont-sm viewport-animate  auto-fit-columns"
                             data-auto-fit-items=".item" data-item-parent=".owl-carousel" data-item-width="336"
                             data-item-max-width="630" data-animation="slideUp" data-animation-item=".item"
                             data-auto-width="yes" data-loop="no" data-dots="yes">
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
                                                <h6 class="title"><a href="#">Country girl shake it for me</a>
                                                </h6>
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
                                                <h6 class="title"><a href="#">You're A Mean One, Mr. Grinch</a>
                                                </h6>
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
                                                <h6 class="title"><a href="#">Country girl shake it for me</a>
                                                </h6>
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
                                                <h6 class="title"><a href="#">Country girl shake it for me</a>
                                                </h6>
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
                                                <h6 class="title"><a href="#">Country girl shake it for me</a>
                                                </h6>
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
                        <div class="d-flex flex-row">
                            <div class="title-box">
                                <h2 class="title h3-md">Videos</h2>
                            </div>
                        </div>
                        <div class="adonis-carousel auto-fit-columns viewport-animate" data-animation="slideUp"
                             data-animation-item=".item" data-auto-width="yes" data-item-parent=".owl-carousel"
                             data-auto-fit-items=".item" data-dots="yes" data-item-width="366"
                             data-item-max-width="380">
                            <div class="gutter-30">
                                <div class="owl-carousel owl-theme-adonis">
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina" src="client/images/videos/videos-6.jpg"
                                                     data-2x="client/images/videos/videos-1@2x.jpg" alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina" src="client/images/videos/videos-2.jpg"
                                                     data-2x="client/images/videos/videos-2@2x.jpg" alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina" src="client/images/videos/videos-3.jpg"
                                                     data-2x="client/images/videos/videos-3@2x.jpg" alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina" src="client/images/videos/videos-2.jpg"
                                                     data-2x="client/images/videos/videos-4@2x.jpg" alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina" src="client/images/videos/videos-5.jpg"
                                                     data-2x="client/images/videos/videos-5@2x.jpg" alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-sm">
                                                <img class="retina" src="client/images/videos/videos-6.jpg"
                                                     data-2x="client/images/videos/videos-6@2x.jpg" alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="library-songs" class="inactive-hide">
                    <section>
                        <div class="d-flex flex-row">
                            <div class="title-box">
                                <h2 class="title">All Songs</h2>
                            </div>
                        </div>
                        <div class="row auto-fit-columns" data-item-width="330" data-item-max-width="630">
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            </div>
                            <div class="col-auto">
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
                            <div class="col-auto">
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
                            </div>
                        </div>
                        <div class="mb-e-20 mb-e-md-40"></div>
                    </section>
                </div>

                <div id="browse-new-playlist" class="inactive-hide">
                    <section>
                        <div class="d-flex flex-row">
                            <div class="title-box">
                                <h6 class="sub-title inactive-color">Featured</h6>
                                <h2 class="title">Playlists</h2>
                            </div>
                        </div>
                        <div class="row auto-fit-columns adonis-animate" data-animation="slideUp"
                             data-animation-item=".col-auto" data-auto-width="yes" data-item-width="153">
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-3.jpg"
                                             data-2x="../client/images/playlists/playlist-3@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-4.jpg"
                                             data-2x="../client/images/playlists/playlist-4@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-5.jpg"
                                             data-2x="../client/images/playlists/playlist-5@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-6.jpg"
                                             data-2x="../client/images/playlists/playlist-6@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-7.jpg"
                                             data-2x="../client/images/playlists/playlist-7@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-8.jpg"
                                             data-2x="../client/images/playlists/playlist-8@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-9.jpg"
                                             data-2x="../client/images/playlists/playlist-9@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-10.jpg"
                                             data-2x="../client/images/playlists/playlist-10@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-11.jpg"
                                             data-2x="../client/images/playlists/playlist-11@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-12.jpg"
                                             data-2x="../client/images/playlists/playlist-12@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-13.jpg"
                                             data-2x="../client/images/playlists/playlist-13@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-14.jpg"
                                             data-2x="../client/images/playlists/playlist-14@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-15.jpg"
                                             data-2x="../client/images/playlists/playlist-15@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-16.jpg"
                                             data-2x="../client/images/playlists/playlist-16@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-17.jpg"
                                             data-2x="../client/images/playlists/playlist-17@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-18.jpg"
                                             data-2x="../client/images/playlists/playlist-18@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-19.jpg"
                                             data-2x="../client/images/playlists/playlist-19@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-20.jpg"
                                             data-2x="../client/images/playlists/playlist-20@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-3.jpg"
                                             data-2x="../client/images/playlists/playlist-3@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-4.jpg"
                                             data-2x="../client/images/playlists/playlist-4@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-5.jpg"
                                             data-2x="../client/images/playlists/playlist-5@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-6.jpg"
                                             data-2x="../client/images/playlists/playlist-6@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-7.jpg"
                                             data-2x="../client/images/playlists/playlist-7@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-8.jpg"
                                             data-2x="../client/images/playlists/playlist-8@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-9.jpg"
                                             data-2x="../client/images/playlists/playlist-9@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-10.jpg"
                                             data-2x="../client/images/playlists/playlist-10@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-11.jpg"
                                             data-2x="../client/images/playlists/playlist-11@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-12.jpg"
                                             data-2x="../client/images/playlists/playlist-12@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-13.jpg"
                                             data-2x="../client/images/playlists/playlist-13@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-14.jpg"
                                             data-2x="../client/images/playlists/playlist-14@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-15.jpg"
                                             data-2x="../client/images/playlists/playlist-15@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-16.jpg"
                                             data-2x="../client/images/playlists/playlist-16@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-17.jpg"
                                             data-2x="../client/images/playlists/playlist-17@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-18.jpg"
                                             data-2x="../client/images/playlists/playlist-18@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-19.jpg"
                                             data-2x="../client/images/playlists/playlist-19@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                            <div class="col-auto">
                                <div class="music-img-box mb-e-30 mb-e-md-40">
                                    <div class="img-box box-rounded-sm img-box-md">
                                        <img class="retina" src="client/images/playlists/playlist-20.jpg"
                                             data-2x="../client/images/playlists/playlist-20@2x.jpg" alt="">
                                        <div class="hover-state">
                                            <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                <span class="pointer play-btn-dark round-btn"><i class="play-icon"></i></span>
                                            </div>
                                            <div class="absolute-top-right pr-e-15 pt-e-15">
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
                    </section>
                </div>

                <div id="library-artists" class="inactive-hide">
                    <div class="row auto-columns adonis-animate" data-animation="slideRightSkew"
                         data-animation-item=".music-img-box"
                         data-responsive-width="0:100%|300:50%|560:33%|820:25%|980:20%|1240:16.66%|1500:14.2858%">
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-md-40">
                                <div class="img-box rounded-circle">
                                    <img class="retina" src="client/images/new-releases/new-releases-33.jpg"
                                         data-2x="../client/images/new-releases/new-releases-33@2x.jpg" alt="">
                                </div>
                                <div class="desc top-sm text-center">
                                    <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                    <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                    <p class="sub-title"><a href="#">3 Songs</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-md-40">
                                <div class="img-box rounded-circle">
                                    <img class="retina" src="client/images/new-releases/new-releases-28.jpg"
                                         data-2x="../client/images/new-releases/new-releases-28@2x.jpg" alt="">
                                </div>
                                <div class="desc top-sm text-center">
                                    <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                    <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                    <p class="sub-title"><a href="#">3 Songs</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-md-40">
                                <div class="img-box rounded-circle">
                                    <img class="retina" src="client/images/new-releases/new-releases-15.jpg"
                                         data-2x="../client/images/new-releases/new-releases-15@2x.jpg" alt="">
                                </div>
                                <div class="desc top-sm text-center">
                                    <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                    <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                    <p class="sub-title"><a href="#">3 Songs</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-md-40">
                                <div class="img-box rounded-circle">
                                    <img class="retina" src="client/images/new-releases/new-releases-16.jpg"
                                         data-2x="../client/images/new-releases/new-releases-16@2x.jpg" alt="">
                                </div>
                                <div class="desc top-sm text-center">
                                    <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                    <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                    <p class="sub-title"><a href="#">3 Songs</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-md-40">
                                <div class="img-box rounded-circle">
                                    <img class="retina" src="client/images/new-releases/new-releases-41.jpg"
                                         data-2x="../client/images/new-releases/new-releases-41@2x.jpg" alt="">
                                </div>
                                <div class="desc top-sm text-center">
                                    <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                    <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                    <p class="sub-title"><a href="#">3 Songs</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-md-40">
                                <div class="img-box rounded-circle">
                                    <img class="retina" src="client/images/new-releases/new-releases-25.jpg"
                                         data-2x="../client/images/new-releases/new-releases-25@2x.jpg" alt="">
                                </div>
                                <div class="desc top-sm text-center">
                                    <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a></h5>
                                    <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                    <p class="sub-title"><a href="#">3 Songs</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="library-upload" class="inactive-hide">

                </div>

                <div id="library-recently-played" class="inactive-hide">

                </div>

                <div id="library-purchased" class="inactive-hide">

                </div>

                <div class="tab-preloader preloader">
                    <div class="preloader-overlay"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
