@extends('layouts.client.main')

@section('title')
    Single Playlist
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
                                <img class="retina box-rounded-md" src="client/images/single/single-2.jpg"
                                     data-2x="client/images/single/single-2@2x.jpg" alt="">
                            </div>
                            <div class="absolute-info">
                                <a class="btn btn-60-60 btn-primary absolute-center adonis-album-button round-btn text-light"
                                   data-album-id="1" role="button" tabindex="0">
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
                        <span class="pr-2">1256</span>
                        <span class="adonis-icon pr-2 icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    version="1.1"><use
                                    xlink:href="#icon-brand-play"></use></svg></span>
                        <span>125K</span>
                    </div>
                    <div class="button-save-share pb-4 text-center">
                        <a class="btn btn-primary mx-auto" href="#">Lưu vào thư viện</a>
                    </div>
                    <div class="about">
                        <h4>Mô tả</h4>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                            himenaeos.
                            Suspendisse faucibus sed dolor eget posuere.Sed id interdum urna. Nam ac elit a ante
                            commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi
                            Lorem ipsum dolor sit amet
                            Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac
                            elit a ante commodo tristique. </p>
                    </div>
                    <div class="pt-e-20 pt-e-lg-40"></div>
                </div>
                <div class="col-md-9 flex-column-content-md pl-e-xl-40">
                    <div class="album-top-box text-center text-md-left">
                        <h6 class="inactive-color">PLAYLISTS</h6>
                        <h1 class="album-title">The Ones That Like Me</h1>
                        <p class="mb-2">Trình bày: <a href="#">Danielle Bradberry</a> Classical</p>
                        <div class="separator mb-4 mt-4">
                            <span class="separator-md"></span>
                        </div>
                        <p class="mb-2">14 bài hát - 30 phút</p>
                        <p class="mb-2">Ra mắt chính thức 12/09/2017</p>
                    </div>

                    <div class="tab-wrapper">
                        <div class="pb-5"></div>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <ul class="nav mb-3 product-tabs" id="pills-tab" role="tablist">
                                <li class="nav-item ">
                                    <a class="active nav-link f-w-600" id="single-songs-tab" data-toggle="pill"
                                       href="#single-songs" role="tab" aria-controls="single-songs"
                                       aria-selected="true">Tất cả bài hát</a>
                                </li>
                            </ul>
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
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">01</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">Begining To See The Light</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">14:13</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1245</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">02</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">Ugly Christmas Sweater</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">10:14</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1010</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">03</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">Feliz Navidad</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">11:08</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1110</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">04</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">What are You Doing New Year&#39;s Eve?</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">14:13</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1245</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">05</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">Mashmallow World</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">12:14</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1245</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">06</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">Hard Candy Christmas</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">13:15</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1325</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">07</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">Baby, It&#39;s Cold Outside</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">16:16</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1980</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">08</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">The Man With The Bag</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">18:14</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1745</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">09</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">What I&#39;m Thankful for</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">19:26</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1428</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">10</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">What I&#39;ve Done - One More Light Live</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">14:13</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1563</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
                                        <li class="item hover-bg-item">
                                            <div class="item-number">
                                                <span class="hover-hide">11</span>
                                                <span class="hover-show adonis-icon icon-1x"><svg
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                            xlink:href="#icon-brand-play"></use></svg> </span>
                                            </div>
                                            <div class="item-title">Talking to Myself - One More Light Live</div>
                                            <div class="item-genre"><span
                                                    class="hover-hide hover-lg-show">Classical</span>
                                            </div>
                                            <div class="item-duration"><span class="hover-hide">17:16</span></div>
                                            <div class="item-tools">
                                                <span class="hover-hide">1536</span>
                                                <div class="hover-show d-flex flex-nowrap hover-tools">
                                            <span class="adonis-icon icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   version="1.1"><use
                                                        xlink:href="#icon-heart-blank"></use></svg></span>
                                                    <span class="ml-3 adonis-icon icon-3x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-plus"></use></svg> </span>
                                                    <span class="ml-3 adonis-icon pointer dropdown-menu-toggle"> <span
                                                            class="adonis-icon icon-4x"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                version="1.1"><use
                                                                    xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                                </div>
                                            </div>
                                            <div class="hover-bg gradient-adonis"></div>
                                        </li>
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
                    <h2 class="title h3-md">More By Danielle Bradbery</h2>
                </div>
                <div class="adonis-carousel auto-fit-columns" data-auto-width="yes"
                     data-item-parent=".owl-carousel" data-auto-fit-items=".item" data-dots="yes"
                     data-item-width="260" data-item-max-width="280">
                    <div class="gutter-30">
                        <div class="owl-carousel owl-theme-adonis">
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                        xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="#">Vestibulum nibh lorem ipsum</a></h6>
                                    <p class="sub-title category"><a href="#">Adonis Music Pop</a></p>
                                </div>
                            </div>
                            <div class="item hover-bg-item">
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
                <div class="pt-e-5 pt-e-lg-10"></div>
            </div>
        </div>
    </div>
@endsection
