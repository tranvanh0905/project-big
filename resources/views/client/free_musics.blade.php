@extends('layouts.client.main')

@section('title')
    Free musics
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
    <!---Weekly Top 15--->
    <div class="ms_weekly_wrapper ms_free_music">
        <div class="ms_weekly_inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>Download Trending Tracks</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 padding_right40">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song1.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Until I Met You</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song2.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Walking Promises</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song3.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Gimme Some Courage</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song4.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Desired Games</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song5.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Dark Alley Acoustic</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 padding_right40">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song6.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Walking Promises</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song7.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Endless Things</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box ms_active_play">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song8.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <div class="ms_bars">
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Dream Your Moments</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song9.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Until I Met You</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song5.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Gimme Some Courage</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song2.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Dark Alley Acoustic</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song11.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">The Heartbeat Stops</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song12.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">One More Stranger</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song13.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Walking Promises</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ms_divider"></div>
                    <div class="ms_weekly_box">
                        <div class="weekly_left">
                            <div class="w_top_song">
                                <div class="w_tp_song_img">
                                    <img src="client/images/weekly/song14.jpg" alt="">
                                    <div class="ms_song_overlay">
                                    </div>
                                    <div class="ms_play_icon">
                                        <img src="client/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                                <div class="w_tp_song_name">
                                    <h3><a href="#">Endless Things</a></h3>
                                    <p>Ava Cornish</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                            <span class="ms_more_icon" data-other="1">
										<img src="client/images/svg/more1.svg" alt="">
									</span>
                            <span class="w_song_dwnload">
										<i class="ms_icon1 dwnload_icon"></i>
									</span>
                        </div>
                        <ul class="more_option">
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To
                                    Favourites</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To
                                    Queue</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                    Now</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To
                                    Playlist</a></li>
                            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---Featured Artists Music--->
    <div class="ms_featured_slider">
        <div class="ms_heading">
            <h1>Download Albums</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_feature_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Best Of Ava Cornish</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Until I Met You</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Gimme Some Courage</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song5.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Walking Promises</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song6.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Desired Games</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Until I Met You</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Gimme Some Courage</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/featured/song4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark Alley Acoustic</a></h3>
                            <p>Ava Cornish &amp; Brian Hill</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next1 slider_nav_next"></div>
        <div class="swiper-button-prev1 slider_nav_prev"></div>
    </div>
    <!----Download Latest---->
    <div class="ms_fea_album_slider">
        <div class="ms_heading">
            <h1>Download Latest</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_album_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Bloodlust</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Time flies</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark matters</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Eye to eye</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album5.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Cloud nine</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album6.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Cobweb of lies</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album1.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Bloodlust</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album2.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Time flies</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album3.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Dark matters</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_rcnt_box">
                        <div class="ms_rcnt_box_img">
                            <img src="client/images/album/album4.jpg" alt="">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="client/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="client/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="#">Eye to eye</a></h3>
                            <p>Ava Cornish & Brian Hill</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next3 slider_nav_next"></div>
        <div class="swiper-button-prev3 slider_nav_prev"></div>
    </div>
    <!----Live Radio Section Start---->
    <div class="ms_radio_wrapper padder_top20">
        <div class="ms_heading">
            <h1>Live Radio</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add
                                            To Favourites</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add
                                            To Queue</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download
                                            Now</a></li>
                                    <li><a href="#"><span class="opt_icon"><span
                                                    class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a>
                                    </li>
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
    <!----Main div close---->
@endsection
