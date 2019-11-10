@extends('layouts.client.main-account-library')

@section('title')
    Thư viện
@endsection

@section('content')
    <section>
        <div class="d-flex">
            <div class="title-box">
                <h2 class="title h3-md">Bài hát</h2>
            </div>
            <div class="button-right ml-auto ml-auto d-flex align-items-end">
                <a href="#" class="mb-4">Xem tất cả<span
                        class="adonis-icon pl-1 icon-arrow icon-1x"><svg
                            xmlns="http://www.w3.org/2000/svg" version="1.1"><use
                                xlink:href="#icon-see-all-arrow-right"/></svg></span></a>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-4 col-lg-4">
                <div class="wrap-slide-song" id="container3">
                    <ul>
                        <li>
                            <img src="https://unsplash.it/252/152?image=974" alt=""/>
                        </li>
                        <li>
                            <img src="https://unsplash.it/252/152?image=973" alt=""/>
                        </li>
                        <li>
                            <img src="https://unsplash.it/252/152?image=972" alt=""/>
                        </li>
                        <li>
                            <img src="https://unsplash.it/252/152?image=971" alt=""/>
                        </li>
                        <li>
                            <img src="https://unsplash.it/252/152?image=970" alt=""/>
                        </li>
                        <li>
                            <img src="https://unsplash.it/252/152?image=964" alt=""/>
                        </li>
                        <li>
                            <img src="https://unsplash.it/252/152?image=954" alt=""/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-8 col-lg-8">
                <div class="adonis-carousel music-img-box-cont-sm viewport-animate"
                     data-animation="slideUp" data-animation-item=".item" data-auto-width="yes"
                     data-loop="no" data-dots="yes"
                     data-responsive-width="0:100%|600:50%|900:33.33%|1200:25%">
                    <div class="gutter-30">
                        <div class="owl-carousel owl-theme-adonis">
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
            </div>
        </div>

    </section>

    <section>
        <div class="d-flex">
            <div class="title-box">
                <h2 class="title h3-md">Danh sách phát</h2>
            </div>
            <div class="button-right ml-auto ml-auto d-flex align-items-end">
                <a href="#" class="mb-4">Xem tất cả <span
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
                        <div class="music-img-box">
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
                    </div>
                    <div class="item">
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
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="d-flex">
            <div class="title-box">
                <h2 class="title h3-md">Album</h2>
            </div>
            <div class="button-right ml-auto ml-auto d-flex align-items-end">
                <a href="#" class="mb-4">Xem tất cả <span
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
                        <div class="music-img-box">
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
                    </div>
                    <div class="item">
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
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="d-flex flex-row">
            <div class="title-box">
                <h2 class="title h3-md">Ca Sĩ</h2>
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
                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a>
                        </h5>
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
                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a>
                        </h5>
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
                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a>
                        </h5>
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
                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a>
                        </h5>
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
                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a>
                        </h5>
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
                        <h5 class="title fs-3"><a href="#" class="f-w-500 h-underline">The Ronettes</a>
                        </h5>
                        <h6 class="f-w-400"><a href="#">FOLLOWING</a></h6>
                        <p class="sub-title"><a href="#">3 Songs</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
