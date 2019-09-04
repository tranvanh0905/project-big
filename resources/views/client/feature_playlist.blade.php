@extends('layouts.client.main')

@section('title')
    Feature playlist
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
    <!----Live Radio Section Start---->
    <div class="ms_top_artist">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>Featured Playlist</h1>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img1.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Top Trendings</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img2.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">New Romantic Charts</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img3.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dance Beats - Hip Hops</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img4.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Workout Time</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img5.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Best Classics Of All Time</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img6.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Heart Broken - Soul Music</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img7.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">International Hits</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img8.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Nostalgia</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img9.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Retros</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song4.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Summer Season</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img10.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Rock It</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img11.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Top 20s Hits</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img12.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Happy Mood</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/radio/img13.jpg" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">90s Best Tracks</a></h3>
                            <p>20 songs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Main div close---->
@endsection
