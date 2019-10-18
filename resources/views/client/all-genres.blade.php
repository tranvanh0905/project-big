@extends('layouts.client.main')

@section('title')
    Tất cả thể loại
@endsection

@section('content')
    <div class="pt-4 pt-lg-5"></div>
    <div class="master-container-fluid">
        <section>
            <div class="title-box">
                <h4 class="title h3 text-uppercase">Tất cả thể loại</h4>
            </div>
            <div class="genres-list">
                <div class="adonis-carousel" data-auto-width="yes" data-dots="yes"
                     data-responsive-width="0:100%|500:50%|750:33.33%|1000:25%">
                    <div class="gutter-30">
                        <div class="owl-carousel owl-theme-adonis">
                            <div class="item">
                                <ul class="list-unstyled m-0">
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Alternative
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Alternative</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Christian&amp;Gospel
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Christian&amp;Gospel</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Country
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Country</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Experimental
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Experimental</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Holiday
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Holiday</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Metal
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Metal</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Metal
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Metal</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Oldies
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Oldies</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="list-unstyled m-0">
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                R&amp;B
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">R&amp;B</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Rock Alternativo
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Rock Alternativo</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Stage and Screen
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Stage and Screen</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Americana
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3"> Americana</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Classic Rock
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Classic Rock</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Alternative
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Alternative</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Hard Rock
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Hard Rock</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Kids &amp; family
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Kids &amp; family</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="list-unstyled m-0">
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                pop
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">pop</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Reggae
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Reggae</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Singer / Song Writer
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Singer / Song Writer</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Urbano Latino
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Urbano Latino</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Blues
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Blues</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Classical
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Classical</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Electronic
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Electronic</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Hip-Hop/Rap
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Hip-Hop/Rap</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="list-unstyled m-0">
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Jazz
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Jazz</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Latino
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Latino</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Musical Tropical
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Musical Tropical</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Pop Latino
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Pop Latino</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Rock
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Rock</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Soul/Frank
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Soul/Frank</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                World
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">World</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="list-unstyled m-0">
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Alternative
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Alternative</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Christian&amp;Gospel
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Christian&amp;Gospel</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Country
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Country</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Experimental
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Experimental</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Holiday
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Holiday</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Metal
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Metal</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Metal
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span class="ml-3">Metal</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleGenre')}}">
                                            <div
                                                class="genres-horizontal music-img-box h-g-bg h-d-shadow bullet-1 box-rounded-sm">
                                                Oldies
                                                <div
                                                    class="hover-state justify-content-between align-items-center d-flex text-light">
                                                    <span class="play-btn-dark bg-transparent ml-4"><i
                                                            class="play-icon"></i></span><span
                                                        class="ml-3">Oldies</span>
                                                    <span class="adonis-icon ml-auto icon-1x"><svg
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                                                xlink:href="#icon-see-all-arrow-right"></use></svg></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
