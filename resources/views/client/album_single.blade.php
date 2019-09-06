@extends('layouts.client.main')

@section('title')
    Albums single
@endsection

@section('custom')
    <!----Album Single Section Start---->
    <div class="ms_album_single_wrapper">
        <div class="album_single_data">
            <div class="album_single_img">
                <img src="client/images/album/single_album.jpg" alt="" class="img-fluid">
            </div>
            <div class="album_single_text">
                <h2>Dream Your Moments</h2>
                <p class="singer_name">By - Ava Cornish, Brian Hill</p>
                <div class="album_feature">
                    <a href="#" class="album_date">5 song | 25:10</a>
                    <a href="#" class="album_date">Released March 23, 2018 | Abc Music Company</a>
                </div>
                <div class="album_btn">
                    <a href="#" class="ms_btn play_btn"><span class="play_all"><img src="client/images/svg/play_all.svg"
                                                                                    alt="">Play All</span><span
                            class="pause_all"><img src="client/images/svg/pause_all.svg" alt="">Pause</span></a>
                    <a href="#" class="ms_btn"><span class="play_all"><img src="client/images/svg/add_q.svg" alt="">Add To Queue</span></a>
                </div>
            </div>
            <div class="album_more_optn ms_more_icon">
                <span><img src="client/images/svg/more1.svg" alt=""></span>
            </div>
            <ul class="more_option">
                <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a>
                </li>
                <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a>
                </li>
                <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
            </ul>
        </div>
        <!----Song List---->
        <div class="album_inner_list">
            <div class="album_list_wrapper">
                <ul class="album_list_name">
                    <li>#</li>
                    <li>Song Title</li>
                    <li>Artist</li>
                    <li class="text-center">Duration</li>
                    <li class="text-center">Add To Favourites</li>
                    <li class="text-center">More</li>
                </ul>
                <ul>
                    <li><a href="#"><span class="play_no">01</span><span class="play_hover"></span></a></li>
                    <li><a href="#">Bloodlust</a></li>
                    <li><a href="#">Ava Cornish & Brian Hill</a></li>
                    <li class="text-center"><a href="#">5:26</a></li>
                    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                    <li class="text-center ms_more_icon"><a href="javascript:;"><span
                                class="ms_icon1 ms_active_icon"></span></a>
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
                    </li>
                </ul>
                <ul>
                    <li><a href="#"><span class="play_no">02</span><span class="play_hover"></span></a></li>
                    <li><a href="#">Desired Games</a></li>
                    <li><a href="#">Ava Cornish & Brian Hill</a></li>
                    <li class="text-center"><a href="#">5:26</a></li>
                    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                    <li class="text-center ms_more_icon"><a href="javascript:;"><span
                                class="ms_icon1 ms_active_icon"></span></a>
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
                    </li>
                </ul>
                <ul>
                    <li><a href="#"><span class="play_no">03</span><span class="play_hover"></span></a></li>
                    <li><a href="#">Until I Met You</a></li>
                    <li><a href="#">Ava Cornish & Brian Hill</a></li>
                    <li class="text-center"><a href="#">5:26</a></li>
                    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                    <li class="text-center ms_more_icon"><a href="javascript:;"><span
                                class="ms_icon1 ms_active_icon"></span></a>
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
                    </li>
                </ul>
                <ul class="play_active_song">
                    <li><a href="#"><span class="play_no">04</span><span class="play_hover"></span></a></li>
                    <li><a href="#">Dark Alley Acoustic</a></li>
                    <li><a href="#">Ava Cornish & Brian Hill</a></li>
                    <li class="text-center"><a href="#">5:26</a></li>
                    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                    <li class="text-center ms_more_icon"><a href="javascript:;"><span
                                class="ms_icon1 ms_active_icon"></span></a>
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
                    </li>
                </ul>
                <ul>
                    <li><a href="#"><span class="play_no">05</span><span class="play_hover"></span></a></li>
                    <li><a href="#">Cloud nine</a></li>
                    <li><a href="#">Ava Cornish & Brian Hill</a></li>
                    <li class="text-center"><a href="#">5:26</a></li>
                    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
                    <li class="text-center ms_more_icon"><a href="javascript:;"><span
                                class="ms_icon1 ms_active_icon"></span></a>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!----Testimonial section Start---->
    <div class="ms_test_wrapper">
        <div class="ms_heading">
            <h1>comments (5)</h1>
        </div>
        <div class="ms_test_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_test_box">
                        <div class="ms_test_top">
                            <div class="ms_test_img">
                                <img src="client/images/user1.jpg" alt="">
                            </div>
                            <div class="ms_test_name">
                                <h3>Frank Adler</h3>
                                <span class="cmnt_time">10 Minutes Ago</span>
                            </div>
                        </div>
                        <div class="ms_test_para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_test_box">
                        <div class="ms_test_top">
                            <div class="ms_test_img">
                                <img src="client/images/user2.jpg" alt="">
                            </div>
                            <div class="ms_test_name">
                                <h3>Frank Adler</h3>
                                <span class="cmnt_time">10 Days Ago</span>
                            </div>
                        </div>
                        <div class="ms_test_para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_test_box">
                        <div class="ms_test_top">
                            <div class="ms_test_img">
                                <img src="client/images/user3.jpg" alt="">
                            </div>
                            <div class="ms_test_name">
                                <h3>Frank Adler</h3>
                                <span class="cmnt_time">10 Hours Ago</span>
                            </div>
                        </div>
                        <div class="ms_test_para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_test_box">
                        <div class="ms_test_top">
                            <div class="ms_test_img">
                                <img src="client/images/user4.jpg" alt="">
                            </div>
                            <div class="ms_test_name">
                                <h3>Frank Adler</h3>
                                <span class="cmnt_time">10 Minutes Ago</span>
                            </div>
                        </div>
                        <div class="ms_test_para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_test_box">
                        <div class="ms_test_top">
                            <div class="ms_test_img">
                                <img src="client/images/user1.jpg" alt="">
                            </div>
                            <div class="ms_test_name">
                                <h3>Frank Adler</h3>
                                <span class="cmnt_time">10 Minutes Ago</span>
                            </div>
                        </div>
                        <div class="ms_test_para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_test_box">
                        <div class="ms_test_top">
                            <div class="ms_test_img">
                                <img src="client/images/user2.jpg" alt="">
                            </div>
                            <div class="ms_test_name">
                                <h3>Frank Adler</h3>
                                <span class="cmnt_time">10 Minutes Ago</span>
                            </div>
                        </div>
                        <div class="ms_test_para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_test_box">
                        <div class="ms_test_top">
                            <div class="ms_test_img">
                                <img src="client/images/user3.jpg" alt="">
                            </div>
                            <div class="ms_test_name">
                                <h3>Frank Adler</h3>
                                <span class="cmnt_time">10 Minutes Ago</span>
                            </div>
                        </div>
                        <div class="ms_test_para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next1 slider_nav_next"></div>
        <div class="swiper-button-prev1 slider_nav_prev"></div>
    </div>
    <!----Comment Form section Start---->
    <div class="ms_cmnt_wrapper">
        <div class="ms_heading">
            <h1>Leave A Comment</h1>
        </div>
        <div class="ms_cmnt_form">
            <form>
                <div class="ms_input_group">
                    <div class="ms_input">
                        <input type="text" class="form-control" placeholder="Enter Your Name Here..">
                    </div>
                    <div class="ms_input marger_top20">
                        <input type="text" class="form-control" placeholder="Enter Your Email Here..">
                    </div>
                </div>
                <div class="ms_input_group1">
                    <div class="ms_input">
                            <textarea name="message" class="form-control"
                                      placeholder="Enter Your Comment Here.."></textarea>
                    </div>
                </div>
                <div class="ms_input_group2">
                    <div class="ms_input">
                        <button class="ms_btn">post your comment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!----Featured Albumn Section Start---->
    <div class="ms_fea_album_slider padder_top5">
        <div class="ms_heading">
            <h1>You May Also Like</h1>
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
    <!----New Releases Section Start---->
    <div class="ms_releases_wrapper">
        <div class="ms_heading">
            <h1>Newly Released Albums</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_release_slider swiper-container">
            <div class="ms_divider"></div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="client/images/weekly/song1.jpg" alt="">
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
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
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
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="client/images/weekly/song3.jpg" alt="">
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
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
                            <div class="w_tp_song_img">
                                <img src="client/images/weekly/song4.jpg" alt="">
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
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ms_release_box">
                        <div class="w_top_song">
                            <span class="slider_dot"></span>
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
                        <div class="weekly_right">
                            <span class="w_song_time">5:10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next2 slider_nav_next"></div>
        <div class="swiper-button-prev2 slider_nav_prev"></div>
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
    <!----Main div close---->
@endsection
