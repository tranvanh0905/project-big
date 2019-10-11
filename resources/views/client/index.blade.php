@extends('layouts.client.main')

@section('title')
    Trang chủ
@endsection

@section('content')
    <main id="main">
        <div class="pt-4 pt-lg-5"></div>
        <div class="master-container-fluid">
            <div class="mb-e-30 mb-e-lg-50">
                <div class="mt-auto mb-3">
                    <div class="tabs tab-style-1 scroll-x">
                        <ul class="nav nav-border js-parent adonis-tabbed-nav moving-border">
                            <li class="menu-item active">
                                <a class="nav-link adonis-ajax-load loaded active m-item m-item-block" href="#"
                                   data-target="#browse-overview">
                                            <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 16 15"><defs></defs><g
                                                        data-name="Layer 2"><g id="overviews_icon"
                                                                               data-name="overviews icon" class="cls-1"><g
                                                                id="overviews_icon-2" data-name="overviews icon"><path
                                                                    class="cls-2"
                                                                    d="M16,1.4A1.43,1.43,0,0,0,14.55,0l-8,.7a1.43,1.43,0,0,0-1.45,1.4v7h0v2.78h0a2,2,0,0,1,0,.38,2.14,2.14,0,0,1-2.19,2.09,2.1,2.1,0,1,1,0-4.19,2.25,2.25,0,0,1,.72.13v-.13h0a.34.34,0,0,0,0-.69h0a.33.33,0,0,0-.18.06,2.75,2.75,0,0,0-.54-.06A2.85,2.85,0,0,0,0,12.22,2.85,2.85,0,0,0,2.91,15a2.85,2.85,0,0,0,2.91-2.78s0,0,0-.06h0V2.09a.71.71,0,0,1,.73-.7l8-.7a.71.71,0,0,1,.73.7v7h0v2.78h0a2,2,0,0,1,0,.36,2.19,2.19,0,1,1-2.19-2.08,2.27,2.27,0,0,1,.72.12V9.44h0a.36.36,0,0,0,.36-.36h0a.36.36,0,0,0-.36-.36h0a.35.35,0,0,0-.18.06,2.72,2.72,0,0,0-.52-.06A2.8,2.8,0,1,0,16,11.52h0Z"></path></g></g></g></svg></span>
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                   data-target="#browse-news" data-content="client/parts/browse/news.html">
                                            <span class="adonis-icon pr-3 icon-4x"><svg version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 455.005 455.005"><g><path
                                                            d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343 c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428 c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423 c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615 c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595 l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72 C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196 c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956 c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004 C455.004,277.119,451.78,270.719,446.158,267.615z"></path><path
                                                            d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126 c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126 C350.916,232.303,352.298,232.676,353.664,232.676z"></path><path
                                                            d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82 c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905 C320.941,252.21,322.318,252.58,323.68,252.58z"></path><path
                                                            d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062 c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z"></path><path
                                                            d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219 c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37 c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464 c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351 c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z"></path><path
                                                            d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409 c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132 C266.219,292.387,268.669,291.131,270.089,288.846z"></path><path
                                                            d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132 c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455 C60.338,188.266,55.714,189.346,53.527,192.864z"></path></g></svg></span>
                                    <span>News</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                   data-target="#browse-new-music" data-content="client/parts/browse/new-music.html">
                                            <span class="adonis-icon pr-3 icon-1x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    viewBox="0 0 12.29 16.21"><defs><style>.cls-1 {
                                                                isolation: isolate
                                                            }

                                                            .cls-2 {
                                                                fill-rule: evenodd
                                                            }</style></defs><g data-name="Layer 2"><g
                                                            id="new_music_icon" data-name="new music icon"
                                                            class="cls-1"><g id="new_music_icon-2"
                                                                             data-name="new music icon"><path
                                                                    class="cls-2"
                                                                    d="M6.37,16.21l.12,0H6.37ZM6.58.08h0L6.37,0V0h0a.4.4,0,0,0-.4.4V10.5a3.4,3.4,0,1,0,.81,2.91.39.39,0,0,0,.07-.21V1.12a7.6,7.6,0,0,1,3.26,2.74.39.39,0,0,0-.17,0,.4.4,0,1,0,.55.15l0,0,.63-.31A8.51,8.51,0,0,0,6.58.08ZM3.37,15.36a2.56,2.56,0,1,1,2.56-2.56A2.56,2.56,0,0,1,3.37,15.36ZM11.31,4.14V7c0,.23.08.46.09.7h.89A8.41,8.41,0,0,0,11.31,4.14Z"></path></g></g></g></svg></span>
                                    <span>New Music</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                   data-target="#browse-playlists" data-content="parts/browse/playlists.html">
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
                                    <span>Playlists</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                   data-target="#browse-charts" data-content="parts/browse/charts.html">
                                            <span class="adonis-icon pr-3 icon-3x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    viewBox="0 0 16 16"><defs><style>.cls-1 {
                                                                isolation: isolate
                                                            }

                                                            .cls-2 {
                                                                fill-rule: evenodd
                                                            }</style></defs><g data-name="Layer 2"><g id="Stats_2"
                                                                                                      class="cls-1"><g
                                                                id="Stats_2-2" data-name="Stats_2"><path class="cls-2"
                                                                                                         d="M15.67,0a.33.33,0,0,0-.33.33V1.94L12.89,3.22a1.85,1.85,0,1,0-2.5,2.67L9.57,7.72a1.84,1.84,0,0,0-.44-.06A1.86,1.86,0,0,0,7.27,9.52a1.84,1.84,0,0,0,.06.44l-1.83.81a1.86,1.86,0,1,0-2.61,2.55l-1,2H.33a.33.33,0,0,0,0,.65H14.77A1.23,1.23,0,0,0,16,14.77V.33A.33.33,0,0,0,15.67,0ZM10.22,4.35a1.2,1.2,0,0,1,2.27-.56h0a1.19,1.19,0,0,1,.14.55,1.21,1.21,0,1,1-2.41,0Zm-1.09,4A1.2,1.2,0,1,1,7.93,9.52,1.21,1.21,0,0,1,9.13,8.32Zm-6.37,3.5a1.22,1.22,0,1,1,.69,1.09h0A1.2,1.2,0,0,1,2.76,11.82Zm12.59,3a.57.57,0,0,1-.57.57H2.65l.82-1.74a1.83,1.83,0,0,0,.48.07,1.86,1.86,0,0,0,1.86-1.86,1.84,1.84,0,0,0-.06-.44l1.83-.81A1.86,1.86,0,1,0,10.17,8L11,6.15a1.84,1.84,0,0,0,.44.06,1.86,1.86,0,0,0,1.86-1.86,1.83,1.83,0,0,0-.09-.55l2.15-1.12Z"></path></g></g></g></svg></span>
                                    <span>Charts</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                   data-target="#browse-genres" data-content="parts/browse/genres.html">
                                            <span class="adonis-icon pr-3 icon-3x"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    viewBox="0 0 17 17.01"><defs><style>.cls-1 {
                                                                isolation: isolate
                                                            }

                                                            .cls-2 {
                                                                fill-rule: evenodd
                                                            }</style></defs><g data-name="Layer 2"><g id="icon_genres"
                                                                                                      data-name="icon genres"
                                                                                                      class="cls-1"><g
                                                                id="icon_genres-2" data-name="icon genres"><path
                                                                    class="cls-2"
                                                                    d="M17,8.5a.39.39,0,0,0-.17-.32l-1.55-1,1.55-1a.39.39,0,0,0,0-.64L8.71.07a.38.38,0,0,0-.43,0L.17,5.48a.39.39,0,0,0,0,.64l1.55,1-1.55,1a.39.39,0,0,0,0,.64l1.55,1-1.55,1a.39.39,0,0,0,0,.64l8.11,5.41a.39.39,0,0,0,.43,0l8.11-5.41a.39.39,0,0,0,0-.64l-1.55-1,1.55-1A.39.39,0,0,0,17,8.5ZM1.08,5.8,8.5.85,15.92,5.8,8.5,10.74,2.63,6.83h0Zm14.83,5.41L8.5,16.16,1.08,11.21l1.33-.89,5.87,3.92a.39.39,0,0,0,.43,0l5.87-3.92ZM8.5,13.45,2.63,9.53h0l-1.54-1,1.33-.89,5.87,3.92a.39.39,0,0,0,.43,0l5.87-3.92,1.33.89Z"></path></g></g></g></svg></span>
                                    <span>Genres</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="nav-link adonis-ajax-load m-item m-item-block" href="#"
                                   data-target="#browse-videos" data-content="parts/browse/videos.html">
                                            <span class="adonis-icon pr-3 icon-3x"><svg version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 39 32"><path
                                                        d="M22.856 0h-6.856c-8.837 0-16 7.163-16 16s7.163 16 16 16v0h6.856c8.837 0 16-7.163 16-16s-7.163-16-16-16v0zM22.816 30.4h-6.776c-7.953 0-14.4-6.447-14.4-14.4v0 0c0-7.953 6.447-14.4 14.4-14.4v0h6.776c7.953 0 14.4 6.447 14.4 14.4v0 0c0 7.953-6.447 14.4-14.4 14.4v0zM26.64 16.496s0-0.064 0-0.096v-0.040l-0.104-0.112-0.12-0.112-9.728-5.6c-0.113-0.064-0.247-0.102-0.391-0.102-0.223 0-0.424 0.091-0.569 0.238l-0 0-0.072 0.088s-0.048 0.040-0.064 0.072 0 0 0 0.048c-0.068 0.112-0.109 0.247-0.112 0.391v11.129c0 0.442 0.358 0.8 0.8 0.8v0 0c0.166-0.006 0.318-0.062 0.442-0.154l-0.002 0.002 9.68-5.6 0.12-0.112c0.038-0.036 0.072-0.075 0.102-0.118l0.002-0.002s0 0 0 0 0-0.064 0-0.096c0.019-0.043 0.035-0.094 0.047-0.146l0.001-0.006c0.004-0.023 0.006-0.049 0.006-0.076s-0.002-0.053-0.006-0.079l0 0.003c0.004-0.023 0.006-0.049 0.006-0.076s-0.002-0.053-0.006-0.079l0 0.003c-0.006-0.062-0.017-0.119-0.034-0.174l0.002 0.006zM17.040 21.008v-8.416l7.264 4.208z"></path></svg></span>
                                    <span>Videos</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="border-hr">
                    </div>
                </div>
            </div>
        </div>
        <div class="master-container-fluid">
            <div class="tabs-content overflow-h">
                <div id="browse-overview" class="inactive-hide active">
                    <div class="adonis-carousel music-img-box-cont-lg adonis-animate"
                         data-animation="cardDealer" data-animation-item=".owl-item.active"
                         data-auto-height="yes" data-scrollbar="yes" data-auto-width="yes" data-loop="no"
                         data-dots="yes" data-responsive-width="0:100%|600:50%|1200:40%">
                        <div class="gutter-30 gutter-xl-40">
                            <div class="owl-carousel owl-theme-adonis">
                                <div class="item">
                                    <div class="music-img-box">
                                        <div class="img-box box-rounded-lg img-box-lg">
                                            <img class="retina"
                                                 src="client/images/browse/browse-overview-1.jpg"
                                                 data-2x="client/images/playlists/browse-overview-1@2x.jpg"
                                                 alt="">
                                            <div class="hover-state">
                                                <div class="absolute-top-right pr-e-percent-5 pt-e-percent-5">
                                                            <span class="pointer dropdown-menu-toggle"><span
                                                                    class="adonis-icon icon-4x"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"><use
                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                                <div class="absolute-center">
                                                            <span class="pointer play-btn-dark  round-btn"><i
                                                                    class="play-icon"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p class="active-color-2 caps mb-1">New Album</p>
                                            <h2 class="title h3-md"><a href="#">The Ones That Like Me</a></h2>
                                            <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="music-img-box mb-e-40">
                                        <div class="img-box box-rounded-lg img-box-lg">
                                            <img class="retina"
                                                 src="client/images/browse/browse-overview-08.jpg"
                                                 data-2x="client/images/playlists/browse-overview-3@2x.jpg"
                                                 alt="">
                                            <div class="hover-state">
                                                <div class="absolute-top-right pr-e-percent-5 pt-e-percent-5">
                                                            <span class="pointer dropdown-menu-toggle"><span
                                                                    class="adonis-icon icon-4x"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"><use
                                                                            xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                                <div class="absolute-center">
                                                            <span class="pointer play-btn-dark  round-btn"><i
                                                                    class="play-icon"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p class="active-color-2 caps mb-2">Featured artist</p>
                                            <h4 class="title h3-md"><a href="#">Taylor lachini</a></h4>
                                            <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                        </div>
                                    </div>
                                    <div class="row gutter-xl-40">
                                        <div class="col-6">
                                            <div class="music-img-box">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-18.jpg"
                                                         data-2x="client/images/playlists/browse-overview-18@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">New album</p>
                                                    <h4 class="title"><a href="#">WHAT Makes Your Country </a>
                                                    </h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="music-img-box">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-6.jpg"
                                                         data-2x="client/images/playlists/browse-overview-6@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">Adonis Music Pop</p>
                                                    <h4 class="title"><a href="#">This One's for You</a></h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutter-xl-40">
                                        <div class="col-6">
                                            <div class="music-img-box mb-e-40">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-09.jpg"
                                                         data-2x="client/images/playlists/browse-overview-09@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">New album</p>
                                                    <h4 class="title"><a href="#">WHAT Makes Your Country </a>
                                                    </h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="music-img-box mb-e-40">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-5.jpg"
                                                         data-2x="client/images/playlists/browse-overview-5@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">New album</p>
                                                    <h4 class="title"><a href="#">WHAT Makes Your Country </a>
                                                    </h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gutter-xl-40">
                                        <div class="col-6">
                                            <div class="music-img-box">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-19.jpg"
                                                         data-2x="client/images/playlists/browse-overview-19@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">New album</p>
                                                    <h4 class="title"><a href="#">WHAT Makes Your Country </a>
                                                    </h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="music-img-box">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-20.jpg"
                                                         data-2x="client/images/playlists/browse-overview-20@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">New album</p>
                                                    <h4 class="title"><a href="#">WHAT Makes Your Country </a>
                                                    </h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutter-xl-40">
                                        <div class="col-6">
                                            <div class="music-img-box mb-e-40">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-18.jpg"
                                                         data-2x="client/images/playlists/browse-overview-18@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">New album</p>
                                                    <h4 class="title"><a href="#">WHAT Makes Your Country </a>
                                                    </h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="music-img-box mb-e-40">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-6.jpg"
                                                         data-2x="client/images/playlists/browse-overview-6@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">Adonis Music Pop</p>
                                                    <h4 class="title"><a href="#">This One's for You</a></h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gutter-xl-40">
                                        <div class="col-6">
                                            <div class="music-img-box">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-4.jpg"
                                                         data-2x="client/images/playlists/browse-overview-3@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">Adonis Music Pop</p>
                                                    <h4 class="title"><a href="#">This One's for You</a></h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="music-img-box">
                                                <div class="img-box box-rounded-lg img-box-lg">
                                                    <img class="retina"
                                                         src="client/images/browse/browse-overview-6.jpg"
                                                         data-2x="client/images/playlists/browse-overview-6@2x.jpg"
                                                         alt="">
                                                    <div class="hover-state">
                                                        <div
                                                            class="absolute-top-right pr-e-percent-10 pt-e-percent-10">
                                                                    <span class="pointer dropdown-menu-toggle"><span
                                                                            class="adonis-icon icon-4x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                version="1.1"><use
                                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                        </div>
                                                        <div class="absolute-center">
                                                                    <span class="pointer play-btn-dark  round-btn"><i
                                                                            class="play-icon"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="desc">
                                                    <p class="active-color-2 caps mb-2">Adonis Music Pop</p>
                                                    <h4 class="title"><a href="#">This One's for You</a></h4>
                                                    <h5 class="sub-title"><a href="#">Danielle Bradbery</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <h6 class="sub-title inactive-color">Featured</h6>
                                <h2 class="title h3-md">Playlists</h2>
                            </div>
                            <div class="button-right ml-auto ml-auto d-flex align-items-end">
                                <a href="#" class="mb-4">See all <span
                                        class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
                            </div>
                        </div>
                        <div class="adonis-carousel music-img-box-cont-sm viewport-animate"
                             data-animation="slideUp" data-animation-item=".item" data-dots="yes"
                             data-auto-width="yes"
                             data-responsive-width="0:50%|400:33.33%|600:25%|800:20%|1000:16.667%|1200:14.285%|1400:12.5%|1600:10%">
                            <div class="gutter-30">
                                <div class="owl-carousel owl-theme-adonis">
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-1.jpg"
                                                     data-2x="client/images/playlists/playlist-1@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="{{route('singlePlaylist')}}">Vestibulum nibh
                                                    lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-11.jpg"
                                                     data-2x="client/images/playlists/playlist-11@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-2.jpg"
                                                     data-2x="client/images/playlists/playlist-2@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-12.jpg"
                                                     data-2x="client/images/playlists/playlist-12@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-3.jpg"
                                                     data-2x="client/images/playlists/playlist-3@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-13.jpg"
                                                     data-2x="client/images/playlists/playlist-13@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-4.jpg"
                                                     data-2x="client/images/playlists/playlist-4@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-14.jpg"
                                                     data-2x="client/images/playlists/playlist-14@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-5.jpg"
                                                     data-2x="client/images/playlists/playlist-5@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-15.jpg"
                                                     data-2x="client/images/playlists/playlist-15@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-6.jpg"
                                                     data-2x="client/images/playlists/playlist-6@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-16.jpg"
                                                     data-2x="client/images/playlists/playlist-16@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-7.jpg"
                                                     data-2x="client/images/playlists/playlist-7@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-17.jpg"
                                                     data-2x="client/images/playlists/playlist-17@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-8.jpg"
                                                     data-2x="client/images/playlists/playlist-8@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-18.jpg"
                                                     data-2x="client/images/playlists/playlist-18@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-9.jpg"
                                                     data-2x="client/images/playlists/playlist-9@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-19.jpg"
                                                     data-2x="client/images/playlists/playlist-19@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-10.jpg"
                                                     data-2x="client/images/playlists/playlist-10@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-20.jpg"
                                                     data-2x="client/images/playlists/playlist-20@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="music-img-box mb-e-30 mb-e-md-40">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-1.jpg"
                                                     data-2x="client/images/playlists/playlist-1@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md img-box-md">
                                                <img class="retina"
                                                     src="client/images/playlists/playlist-2.jpg"
                                                     data-2x="client/images/playlists/playlist-1@2x.jpg"
                                                     alt="">
                                                <div class="hover-state">
                                                    <div class="absolute-bottom-left pl-e-15 pb-e-15">
                                                                <span class="pointer play-btn-dark round-btn"><i
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
                                            <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                            <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-e-20 pt-e-lg-40"></div>
                    </section>
                    <section class="viewport-animate" data-animation="slideUp" data-animation-item=".col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-box-text-over lg box-rounded-lg mb-4">
                                    <img src="client/images/this-week/popular-album-week.jpg"
                                         data-2x="client/images/this-week/popular-album-week@2x.jpg" alt="">
                                    <div class="hover-state show">
                                        <div class="absolute-top-left pl-e-percent-10 pt-e-percent-8">
                                            <h6 class="text-light">POPULAR ALBUM THIS WEEK</h6>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-percent-8 pb-e-percent-8">
                                            <a href="#" class="text-light"><i class="icon-arrow-right2"></i>
                                                View all<span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
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
                                            <h6 class="text-light">NEW SONG THIS WEEK</h6>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-percent-8 pb-e-percent-8">
                                            <a href="#" class="text-light"><i class="icon-arrow-right2"></i>
                                                View all <span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
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
                                            <h6 class="text-light">TOP ARTISTS</h6>
                                        </div>
                                        <div class="absolute-bottom-right pr-e-percent-8 pb-e-percent-8">
                                            <a href="#" class="text-light"><i class="icon-arrow-right2"></i>
                                                View all <span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
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
                        <div class="row">
                            <div class="col-xxl-7 col-lg-8">
                                <div class="d-flex flex-row">
                                    <div class="title-box">
                                        <h6 class="sub-title inactive-color">Hot Track</h6>
                                        <h2 class="title h3-md">Hot Songs</h2>
                                    </div>
                                    <div class="button-right ml-auto ml-auto mt-auto mb-4 d-flex">
                                        <a href="#">See all <span class="adonis-icon pl-1 icon-arrow icon-1x"><svg
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
                                                <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                                    <div class="img-box img-box-sm box-rounded-sm">
                                                        <img src="client/images/hot-song/hot-1.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">The Separation</a>
                                                        </h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-2.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Country girl shake it
                                                                for me</a></h6>
                                                        <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-3.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Stirring of a
                                                                fool</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-4.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Nothings into
                                                                Somethings</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-5.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Let You Down</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
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
                                                        <h6 class="title fs-2"><a href="#">Nothings into
                                                                Somethings</a></h6>
                                                        <p class="sub-title"><a href="#">Sam Hunt</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-7.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">O Come, All Ye
                                                                Faithful</a></h6>
                                                        <p class="sub-title"><a href="#">Kesha</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-8.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Fetty Wap Ft
                                                                Monty</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-9.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Do You Hear What I
                                                                Hear</a></h6>
                                                        <p class="sub-title"><a href="#">Band Aid</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-10.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Look What You Made Me
                                                                Do</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
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
                                                        <h6 class="title fs-2"><a href="#">Carol of the
                                                                Bells</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-12.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Carol of the
                                                                Bells</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-13.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">You're A Mean One,
                                                                Mr. Grinch</a></h6>
                                                        <p class="sub-title"><a href="#">Darius Rucker</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-14.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Joy To The World</a>
                                                        </h6>
                                                        <p class="sub-title"><a href="#">Pentatonix</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-15.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Something Just Like
                                                                This</a></h6>
                                                        <p class="sub-title"><a href="#">Demi Lovato</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
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
                                                        <h6 class="title fs-2"><a href="#">The Separation</a>
                                                        </h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-2.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Country girl shake it
                                                                for me</a></h6>
                                                        <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-3.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Stirring of a
                                                                fool</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-4.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Nothings into
                                                                Somethings</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-5.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Let You Down</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                                                                xlink:href="#icon-heart-blank"/></svg></span>
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
                                                        <h6 class="title fs-2"><a href="#">The Separation</a>
                                                        </h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-2.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Country girl shake it
                                                                for me</a></h6>
                                                        <p class="sub-title"><a href="#">Bing Crosby</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-3.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Stirring of a
                                                                fool</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-4.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Nothings into
                                                                Somethings</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                                        <img src="client/images/hot-song/hot-5.jpg" alt="">
                                                    </div>
                                                    <div class="des">
                                                        <h6 class="title fs-2"><a href="#">Let You Down</a></h6>
                                                        <p class="sub-title"><a href="#">Rachel Platten</a></p>
                                                    </div>
                                                    <div
                                                        class="hover-state d-flex justify-content-between align-items-center">
                                                                <span class="pointer play-btn-dark box-rounded-sm"><i
                                                                        class="play-icon"></i></span>
                                                        <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="adonis-icon text-light pointer mr-2 icon-2x"><svg
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
                                    </div>
                                </div>
                                <div class="pt-e-20 pt-e-lg-40"></div>
                            </div>
                            <div class="col-xxl-5 col-lg-4">
                                <div class="title pb-e-15">
                                    <h6 class="title inactive-color">Video Today</h6>
                                    <h2 class="title h3-md">Watch Now</h2>
                                </div>
                                <div class="music-img-box">
                                    <div class="img-box box-rounded-md">
                                        <img src="client/images/watch-now/watch-now.jpg" alt="">
                                    </div>
                                    <div class="hover-state show">
                                        <div
                                            class="absolute-top pl-e-15 pr-e-15 pt-e-15 pl-e-md-30 pr-e-md-30 pt-e-md-30">
                                            <h6 class="album-name text-light">Album: Life Changes</h6>
                                        </div>
                                        <div
                                            class="absolute-bottom pl-e-15 pr-e-15 pb-e-md-15  pl-e-md-30 pr-e-30 pb-e-md-30 d-flex">
                                            <div class="">
                                                <a href="#"><h5 class="album-title text-light">The Ones That
                                                        Like Me</h5></a>
                                                <a href="#"><h6 class="artist-name text-light">David Jame</h6>
                                                </a>
                                            </div>
                                            <div class="ml-auto">
                                                        <span class="pointer play-btn-dark play-btn-dark round-btn"><i
                                                                class="play-icon"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-e-30 pt-e-lg-40"></div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="d-flex">
                            <div class="title-box">
                                <h6 class="sub-title inactive-color">New</h6>
                                <h2 class="title h3-md">Releases</h2>
                            </div>
                            <div class="button-right ml-auto ml-auto d-flex align-items-end">
                                <a href="#" class="mb-4">See all <span
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
                                    <div class="item">
                                        <div class="music-img-box">
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                            <div class="img-box box-rounded-md">
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
                                </div>
                            </div>
                        </div>
                        <div class="pt-e-20 pt-e-lg-40"></div>
                    </section>
                    <section>
                        <div class="adonis-carousel viewport-animate" data-animation="slideUp"
                             data-animation-item=".owl-item.active" data-dots="yes" data-auto-width="yes"
                             data-responsive-width="0:100%|500:50%|730:33.33%|1100:25%|1460:20%">
                            <div class="gutter-30">
                                <div class="owl-carousel owl-theme-adonis">
                                    <div class="item">
                                        <div class="img-box-text-over lg box-rounded-lg">
                                            <img src="client/images/radios/radios-1.jpg"
                                                 data-2x="client/images/radios/radios-1@2x.jpg" alt="">
                                            <div
                                                class="absolute-info d-flex flex-column justify-content-between">
                                                <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h5 text-light">FEATURED
                                                    RADIO
                                                </div>
                                                <div>
                                                    <h4 class="fs-7 m-0 text-light text-center"><span
                                                            class="font-weight-bold">Adonis</span><br>
                                                        <em><span class="font-weight-light">Radio Today</span>
                                                        </em></h4>
                                                </div>
                                                <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto">
                                                    <a href="#" class="color-white">View all<span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-box-text-over lg box-rounded-lg">
                                            <img src="client/images/radios/radios-2.jpg"
                                                 data-2x="client/images/radios/radios-2@2x.jpg" alt="">

                                            <div
                                                class="absolute-info d-flex flex-column justify-content-between">
                                                <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h6 text-light">FEATURED
                                                    RADIO
                                                </div>
                                                <div>
                                                    <h4 class="fs-7 m-0 text-center text-light"><span
                                                            class=" color-active font-weight-bold">Adonis</span><br>
                                                        <em><span class="font-weight-light">Discover</span>
                                                        </em></h4>
                                                </div>
                                                <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto">
                                                    <a href="#" class="color-white">View all<span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-box-text-over lg box-rounded-lg">
                                            <img src="client/images/radios/radios-3.jpg"
                                                 data-2x="client/images/radios/radios-3@2x.jpg" alt="">

                                            <div
                                                class="absolute-info d-flex flex-column justify-content-between">
                                                <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h6 text-light">FEATURED
                                                    RADIO
                                                </div>
                                                <div>
                                                    <h4 class="fs-7 m-0 text-dark text-center"><span
                                                            class="font-weight-bold">Adonis</span><br>
                                                        <em><span
                                                                class="font-weight-light">Top Song from Genre</span>
                                                        </em></h4>
                                                </div>
                                                <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto">
                                                    <a href="#" class="color-white">View all<span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-box-text-over lg box-rounded-lg">
                                            <img src="client/images/radios/radios-4.jpg"
                                                 data-2x="client/images/radios/radios-4@2x.jpg" alt="">

                                            <div
                                                class="absolute-info d-flex flex-column justify-content-between">
                                                <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h6 text-light">FEATURED
                                                    RADIO
                                                </div>
                                                <div>
                                                    <h4 class="fs-7 m-0 text-light text-center"><span
                                                            class="font-weight-bold color-pink">Adonis</span><br>
                                                        <em><span
                                                                class="font-weight-light">Original Playlists</span>
                                                        </em></h4>
                                                </div>
                                                <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto">
                                                    <a href="#" class="color-white">View all<span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-box-text-over lg box-rounded-lg">
                                            <img src="client/images/radios/radios-5.jpg"
                                                 data-2x="client/images/radios/radios-5@2x.jpg" alt="">
                                            <div
                                                class="absolute-info d-flex flex-column justify-content-between">
                                                <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h6 text-light">FEATURED
                                                    RADIO
                                                </div>
                                                <div>
                                                    <h4 class="fs-7 m-0 text-light text-center"><span
                                                            class="font-weight-bold color-active">Adonis</span><br>
                                                        <em><span
                                                                class="font-weight-light">A wide range of voices</span>
                                                        </em></h4>
                                                </div>
                                                <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto">
                                                    <a href="#" class="color-white">View all<span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img-box-text-over lg box-rounded-lg">
                                            <img src="client/images/radios/radios-5.jpg"
                                                 data-2x="client/images/radios/radios-5@2x.jpg" alt="">
                                            <div
                                                class="absolute-info d-flex flex-column justify-content-between">
                                                <div class="pt-3 pt-lg-4 pl-3 pl-lg-4 h6 text-light">FEATURED
                                                    RADIO
                                                </div>
                                                <div>
                                                    <h4 class="fs-7 m-0 text-light text-center"><span
                                                            class="font-weight-bold color-active">Adonis</span><br>
                                                        <em><span
                                                                class="font-weight-light">A wide range of voices</span>
                                                        </em></h4>
                                                </div>
                                                <div class="pb-3 pb-lg-4 pr-3 pr-lg-4 ml-auto">
                                                    <a href="#" class="color-white">View all<span
                                                            class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-see-all-arrow-right"/></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="pt-e-20 pt-e-lg-40"></div>
                    <section class="viewport-ajax-content"
                             data-content="client/parts/browse/new-music.html"></section>
                </div>
                <div id="browse-new-music" class="inactive-hide"></div>
                <div id="browse-news" class="inactive-hide"></div>
                <div id="browse-playlists" class="inactive-hide"></div>
                <div id="browse-charts" class="inactive-hide"></div>
                <div id="browse-genres" class="inactive-hide"></div>
                <div id="browse-videos" class="inactive-hide"></div>
                <div class="tab-preloader preloader">
                    <div class="preloader-overlay"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
