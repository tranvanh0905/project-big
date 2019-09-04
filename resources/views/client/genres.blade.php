@extends('layouts.client.main')

@section('title')
    Genres
@endsection

@section('content')
    <!---Header--->
    <div class="ms_header">
        <div class="ms_top_left">
            <div class="ms_top_search">
                <input type="text" class="form-control" placeholder="Search Music Here..">
                <span class="search_icon">
							<img src="client/images/svg/search.svg" alt="">
						</span>
            </div>
            <div class="ms_top_trend">
                <span><a href="#" class="ms_color">Trending Songs :</a></span> <span class="top_marquee"><a href="#">Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley (+8 More)</a></span>
            </div>
        </div>
        <div class="ms_top_right">
            <div class="ms_top_lang">
                <span data-toggle="modal" data-target="#lang_modal">languages <img src="client/images/svg/lang.svg"
                                                                                   alt=""></span>
            </div>
            <div class="ms_top_btn">
                <a href="javascript:;" class="ms_btn reg_btn" data-toggle="modal"
                   data-target="#myModal"><span>register</span></a>
                <a href="javascript:;" class="ms_btn login_btn" data-toggle="modal"
                   data-target="#myModal1"><span>login</span></a>
            </div>
        </div>
    </div>
    <!----Top Genres Section Start---->
    <div class="ms_genres_wrapper ms_genres_single padder_top90">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Top Genres</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ms_genres_box">
                    <img src="client/images/genrs/img1.jpg" alt="" class="img-fluid"/>
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_play_icon">
                            <img src="client/images/svg/play.svg" alt="">
                        </div>
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">romantic</a></span>
                            <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                        </div>
                    </div>
                    <div class="ms_box_overlay_on">
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">romantic</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img2.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">Classical</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">Classical</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img3.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">hip hop</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">hip hop</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img5.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">dancing</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">dancing</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img6.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">EDM</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">EDM</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ms_genres_box">
                    <img src="client/images/genrs/img4.jpg" alt="" class="img-fluid"/>
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_play_icon">
                            <img src="client/images/svg/play.svg" alt="">
                        </div>
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">rock</a></span>
                            <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                        </div>
                    </div>
                    <div class="ms_box_overlay_on">
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">rock</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img7.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">Jazz</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">Jazz</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img8.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">metal</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">metal</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img9.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">pop</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">pop</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img10.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">folk</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">folk</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ms_genres_box">
                            <img src="client/images/genrs/img11.jpg" alt="" class="img-fluid"/>
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">indie</a></span>
                                    <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                                </div>
                            </div>
                            <div class="ms_box_overlay_on">
                                <div class="ovrly_text_div">
                                    <span class="ovrly_text1"><a href="#">indie</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ms_genres_box">
                    <img src="client/images/genrs/img12.jpg" alt="" class="img-fluid"/>
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_play_icon">
                            <img src="client/images/svg/play.svg" alt="">
                        </div>
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">soul</a></span>
                            <span class="ovrly_text2"><a href="genres_single.html">view song</a></span>
                        </div>
                    </div>
                    <div class="ms_box_overlay_on">
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">soul</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ms_genres_box">
                    <img src="client/images/genrs/img13.jpg" alt="" class="img-fluid"/>
                    <div class="ms_main_overlay">
                        <div class="ms_box_overlay"></div>
                        <div class="ms_play_icon">
                            <img src="client/images/svg/play.svg" alt="">
                        </div>
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">blues</a></span>
                            <span class="ovrly_text2"><a href="#">view song</a></span>
                        </div>
                    </div>
                    <div class="ms_box_overlay_on">
                        <div class="ovrly_text_div">
                            <span class="ovrly_text1"><a href="#">blues</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Live Radio Section Start---->
    <div class="ms_radio_wrapper">
        <div class="ms_heading">
            <h1>Live Radio</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_relative_inner">
            <div class="ms_radio_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img1.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Top Trendings</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img2.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">New Romantic Charts</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img3.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Dance Beats - Hip Hops</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img4.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Workout Time</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img5.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Best Classics Of All Time</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img6.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Heart Broken - Soul Music</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img1.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img2.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Until I Met You</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img3.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Gimme Some Courage</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="client/images/radio/img4.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="client/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span
                                                        class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Dark Alley Acoustic</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next4 slider_nav_next"></div>
            <div class="swiper-button-prev4 slider_nav_prev"></div>
        </div>
    </div>
    <!----Main div close---->
@endsection
