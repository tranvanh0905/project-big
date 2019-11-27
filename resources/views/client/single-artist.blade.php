@extends('layouts.client.main')

@section('title')
    Single Artist
@endsection

@section('content')
    <div class="album-cover-bg blur-bottom artist-bg-1"></div>
    <div class="container">
        <div class="album-spacer"></div>
        <div class="row justify-content-between">
            <div class="col-xl-7 text-center text-md-left">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <div class="music-image-box">
                            <div class="img-box mb-3"><img class="retina box-rounded-md"
                                                           src="{{url($singleArtist->avatar)}}"
                                                           data-2x="{{url($singleArtist->avatar)}}"
                                                           alt="{{$singleArtist->name}}"></div>
                            <div class="mb-4">
                            <span class="adonis-icon icon-1x"><svg class="mr-2" version="1.1"
                                                                   xmlns="http://www.w3.org/2000/svg" height="15"
                                                                   viewBox="0 0 32 32"><path
                                            d="M14.496 22c4.136 0 7.504-4.096 7.504-9.128s-3.368-9.12-7.504-9.12c-2.195 0.041-4.134 1.105-5.363 2.735l-0.013 0.017c-1.323 1.704-2.121 3.874-2.121 6.23 0 0.060 0 0.12 0.002 0.179l-0-0.009c0 5 3.4 9.096 7.496 9.096zM14.496 5.752c3.040 0 5.504 3.2 5.504 7.12s-2.464 7.128-5.504 7.128-5.496-3.2-5.496-7.128 2.464-7.12 5.496-7.12zM20.8 21c-0.552 0-1 0.448-1 1s0.448 1 1 1v0c3.422 0.005 6.195 2.778 6.2 6.2v0c0 0.442-0.358 0.8-0.8 0.8v0h-23.4c-0.442 0-0.8-0.358-0.8-0.8v0c0.005-3.422 2.778-6.195 6.2-6.2h0c0.552 0 1-0.448 1-1s-0.448-1-1-1v0c-4.527 0.005-8.195 3.673-8.2 8.2v0c0 1.546 1.254 2.8 2.8 2.8v0h23.4c1.546 0 2.8-1.254 2.8-2.8v0c-0.005-4.527-3.673-8.195-8.2-8.2h-0zM15.2 2.64c0.647-0.4 1.432-0.637 2.271-0.64h0.001c3.032 0 5.496 3.2 5.496 7.128 0.001 0.047 0.001 0.102 0.001 0.158 0 0.678-0.073 1.339-0.213 1.975l0.011-0.061c-0.017 0.068-0.026 0.146-0.026 0.227 0 0.471 0.325 0.865 0.763 0.972l0.007 0.001c0.035 0.004 0.075 0.006 0.116 0.006s0.081-0.002 0.121-0.006l-0.005 0c0.477-0.006 0.873-0.344 0.967-0.793l0.001-0.007c0.183-0.749 0.288-1.61 0.288-2.494 0-0.006 0-0.012-0-0.019v0.001c0-4.992-3.4-9.088-7.496-9.088-1.215 0.004-2.35 0.345-3.316 0.936l0.028-0.016c-0.37 0.152-0.626 0.51-0.626 0.927 0 0.552 0.448 1 1 1 0.23 0 0.443-0.078 0.612-0.209l-0.002 0.002zM24 17.040c-0.552 0-1 0.448-1 1s0.448 1 1 1v0c3.326 0.053 6.002 2.761 6.002 6.095 0 0.059-0.001 0.118-0.003 0.177l0-0.009c-0.001 0.119-0.027 0.232-0.074 0.333l0.002-0.005c-0.052 0.118-0.083 0.256-0.083 0.401 0 0.407 0.241 0.758 0.589 0.917l0.006 0.003c0.114 0.056 0.249 0.088 0.391 0.088 0.006 0 0.012-0 0.018-0h-0.001c0.414-0.011 0.764-0.27 0.91-0.633l0.002-0.007c0.152-0.333 0.24-0.723 0.24-1.133 0-0.004 0-0.008-0-0.012v0.001c0.001-0.048 0.002-0.104 0.002-0.161 0-4.438-3.571-8.042-7.997-8.095l-0.005-0z"></path></svg>
                                {{$singleArtist->follow}}</span>
                                <span class="adonis-icon ml-3 icon-1x"><svg class="mr-2" version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            height="15"
                                                                            viewBox="0 0 32 32"><path
                                                d="M31.286 0.469c-0.363-0.305-0.818-0.469-1.285-0.469-0.115 0-0.232 0.010-0.348 0.031l-17.002 3c-0.956 0.168-1.652 0.998-1.652 1.969v17.17c-1.015-0.736-2.332-1.17-3.794-1.17-0.85 0-1.7 0.141-2.529 0.416-1.898 0.633-3.42 1.902-4.176 3.484-0.584 1.223-0.659 2.553-0.214 3.746 0.761 2.038 2.923 3.354 5.508 3.354 0.85 0 1.7-0.139 2.528-0.416 1.897-0.631 3.419-1.9 4.175-3.48 0.325-0.682 0.477-1.396 0.483-2.104h0.018v-16c0.115 0 0.232-0.010 0.348-0.029l16.655-2.939v12.138c-1.016-0.736-2.332-1.17-3.795-1.17-0.85 0-1.701 0.141-2.529 0.416-1.898 0.633-3.42 1.902-4.174 3.484-0.584 1.223-0.66 2.553-0.215 3.746 0.762 2.038 2.922 3.354 5.508 3.354 0.85 0 1.701-0.139 2.529-0.416 1.896-0.631 3.418-1.9 4.174-3.48 0.326-0.682 0.477-1.396 0.484-2.104h0.018v-21c0-0.59-0.262-1.152-0.715-1.531zM7.688 29.688c-2.396 0.799-4.873 0.018-5.529-1.74-0.658-1.76 0.751-3.834 3.146-4.633 2.396-0.799 4.873-0.020 5.529 1.74 0.659 1.759-0.75 3.834-3.146 4.633zM26.653 26.688c-2.398 0.799-4.875 0.018-5.531-1.74-0.658-1.76 0.752-3.834 3.146-4.633 2.398-0.799 4.875-0.020 5.531 1.74 0.659 1.759-0.749 3.834-3.146 4.633zM29.96 5l-17.002 3v-3l17.002-3v3z"></path></svg>
                                    {{count($singleArtist->songs)}}</span>
                            </div>
                            <button class="btn btn-outline active-border rounded-btn btn-lg-wide">Quan tâm
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7 pt-3 pt-md-0">
                        <h1 class="fs-md-13 h1 pt-md-5">{{$singleArtist->nick_name}}</h1>
                        <h3 class="mb-4">Giới thiệu</h3>
                        <p>{{$singleArtist->about}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 text-center text-md-right">
            </div>
        </div>
        <section>
            <div class="pt-4"></div>
            <div class="title-box">
                <h2 class="title h3-md">Bài hát</h2>
            </div>
            <div class="adonis-carousel music-img-box-cont-sm" data-auto-width="no" data-loop="no"
                 data-dots="yes" data-items-responsive="0:1|600:2|900:3|1200:4">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">
                            <div class="item">
                                <?php
                                $count_loop = 0;
                                $html = '</div><div class="item">';
                                ?>
                                @foreach($singleArtist->songs  as $song)
                                    <?php $count_loop++ ?>
                                    <div class="img-box-horizontal music-img-box h-g-bg h-d-shadow">
                                        <div class="img-box img-box-sm box-rounded-sm">
                                            <img src="{{url($song->cover_image)}}" alt="{{$song->name}}">
                                        </div>
                                        <div class="des">
                                            <h6 class="title"><a href="{{route('singleSong', ['songId' => $song->id])}}">{{$song->name}}</a></h6>
                                            <p class="sub-title">
                                                @foreach($song->artists as $artist)
                                                    {{$artist->nick_name}}
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="hover-state d-flex justify-content-between align-items-center">
                                            <span class="pointer play-btn-dark box-rounded-sm"><i class="play-icon"></i></span>
                                            <div class="d-flex align-items-center">
                                                <span class="adonis-icon text-light pointer mr-2 icon-2x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-heart-blank"></use></svg></span>
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
                <div class="pt-e-20 pt-e-lg-40"></div>
        </section>
        <section>
            <div class="title-box">
                <h2 class="title h3-md">Albums</h2>
            </div>
            <div class="adonis-carousel auto-fit-columns" data-auto-width="yes" data-item-parent=".owl-carousel"
                 data-auto-fit-items=".item" data-dots="yes" data-item-width="260" data-item-max-width="280">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">

                        <div class="item">
                            <div class="music-img-box">
                                <div class="img-box box-rounded-sm">
                                    <img class="retina" src="client/images/new-releases/new-releases-1.jpg"
                                         data-2x="client/images/new-releases/new-releases-1@2x.jpg" alt="">
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
            <div class="pt-e-20 pt-e-lg-40"></div>
        </section>
        <section>
            <div class="title-box">
                <h2 class="title h3-md">Các ca sĩ khác</h2>
            </div>
            <div class="adonis-carousel auto-fit-columns" data-auto-fit-items=".item" data-auto-width="yes"
                 data-loop="no" data-dots="yes" data-item-width="230" data-item-max-width="380">
                <div class="gutter-30">
                    <div class="owl-carousel owl-theme-adonis">
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-33.jpg"
                                             data-2x="client/images/new-releases/new-releases-33@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-28.jpg"
                                             data-2x="client/images/new-releases/new-releases-28@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-15.jpg"
                                             data-2x="client/images/new-releases/new-releases-15@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-16.jpg"
                                             data-2x="client/images/new-releases/new-releases-16@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-41.jpg"
                                             data-2x="client/images/new-releases/new-releases-41@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-25.jpg"
                                             data-2x="client/images/new-releases/new-releases-25@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-26.jpg"
                                             data-2x="client/images/new-releases/new-releases-26@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-42.jpg"
                                             data-2x="client/images/new-releases/new-releases-42@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-31.jpg"
                                             data-2x="client/images/new-releases/new-releases-31@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-32.jpg"
                                             data-2x="client/images/new-releases/new-releases-32@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="music-img-box">
                                    <div class="img-box rounded-circle">
                                        <img class="retina"
                                             src="client/images/new-releases/new-releases-35.jpg"
                                             data-2x="client/images/new-releases/new-releases-35@2x.jpg"
                                             alt="">
                                    </div>
                                    <div class="desc top-sm text-center">
                                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The
                                                Ronettes</a></h5>
                                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                                        <p class="sub-title"><a href="#">3 Songs</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </section>
    </div>
@endsection
