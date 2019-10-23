@extends('layouts.client.main')

@section('title')
    Single Song
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
                    <div class="pb-4 d-inline-block album-likes">
                                <span class="adonis-icon pr-2 icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                            version="1.1"><use
                                            xlink:href="#icon-heart-blank"></use></svg></span>
                        <span class="pr-2">1256</span>
                        <span class="adonis-icon pr-2 icon-1x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    version="1.1"><use
                                    xlink:href="#icon-brand-play"></use></svg></span>
                        <span>125K</span>
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
                        <h6 class="inactive-color">BÀI HÁT</h6>
                        <h1 class="album-title">The Ones That Like Me</h1>
                        <p class="mb-2">Ca sĩ: <a href="#">Danielle Bradberry</a> Classical</p>
                        <div class="separator mb-4 mt-4">
                            <span class="separator-md"></span>
                        </div>
                        <p class="mb-2">Ra mắt chính thức 12/09/2017</p>
                    </div>

                    <div class="tab-wrapper">
                        <div class="pb-5"></div>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <ul class="nav mb-3 product-tabs" id="pills-tab" role="tablist">
                                <li class="nav-item ">
                                    <a class="active nav-link f-w-600" id="single-songs-tab" data-toggle="pill"
                                       href="#single-songs" role="tab" aria-controls="single-songs"
                                       aria-selected="true">Lời bài hát</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link f-w-600" id="single-rating-tab" data-toggle="pill"
                                       href="#single-rating" role="tab" aria-controls="single-rating"
                                       aria-selected="false">Bình luận</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pt-4"></div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="single-songs" role="tabpanel"
                                 aria-labelledby="single-songs-tab">
                                <div class="shop-items">
                                    <div class="lyrics">
                                        <p style="height:auto;">Hát cho anh nghe 1 bản
                                            tình ca
                                            <br>Gửi yêu thương theo gió bay la đà
                                            <br>Nắng vàng buông lơi tóc thơ
                                            <br>Ngỡ rằng như bao giấc mơ
                                            <br>Được có anh mang câu ca tình ngân nga
                                            <br>
                                            <br>Hát cho anh nghe 1 bản tình ca
                                            <br>Ngày tháng đưa mây bay vời vợi
                                            <br>Mối tình đơn phương thế thôi
                                            <br>Chắc là anh không biết chăng
                                            <br>Lời yêu ko dám nói ra đành thôi
                                            <br>
                                            <br>Đông đã về người ta xốn xang
                                            <br>Bao nhân tình gặp nhau lối quen
                                            <br>Cô đơn là bạn của riêng em phải ko anh?..
                                            <br>Em ước rằng mình mãi bé thôi
                                            <br>Để ngưng lại tình em mãi đây
                                            <br>Em vẫn hát và em thôi được buồn
                                            <br>
                                            <br>Một hai ba ngày qua vội vã
                                            <br>Là từng đêm dài theo cành lá
                                            <br>Là bài ca còn mang buồn thương đến bao giờ?
                                            <br>Thời gian có đợi ai chờ ai
                                            <br>Mà anh đâu biết rằng
                                            <br>Lời yêu cất trong đêm thâu một mình
                                            <br>
                                            <br>Đông đã về người ta xốn xang
                                            <br>Bao nhân tình gặp nhau lối quen
                                            <br>Cô đơn là bạn của riêng em phải ko anh?...
                                            <br>Em ước rằng mình mãi bé thôi
                                            <br>Để ngưng lại tình em mãi đây
                                            <br>Em vẫn hát và em thôi được buồn
                                            <br>
                                            <br>Liệu anh có thể lắng nghe bài hát...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-rating" role="tabpanel"
                                 aria-labelledby="single-rating-tab">
                                <div class="row">
                                    <div class="col-xl-12 mt-auto mb-2 mb-xl-auto">
                                        <form action="">
                                            <div class="form-group">
                                                <label for="title-comment">Tiêu đề</label>
                                                <input type="text" name="title-comment" id="title-comment"
                                                       class="form-control">
                                                <label for="comment">Viết bình luận</label>
                                                <textarea name="comment" id="comment" cols="30" rows="5"
                                                          class="form-control"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Bình luận</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="pt-4 customer-review">
                                    <h4 class="pb-3">Bình luận của người cùng nghe</h4>
                                    <div class="d-inline-flex pb-3">
                                        <div><img class="rounded-circle"
                                                  src="client/images/new-releases/new-releases-33.jpg" alt="">
                                        </div>
                                        <div class="pl-e-25">
                                            <div class="d-flex justify-content-between">
                                                <h5>Great Album for all</h5>
                                                <span>Jan 15, 2018</span>
                                            </div>
                                            <div class="adonis-star-rating d-flex align-items-center">
                                                By: David Jame
                                            </div>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                                per inceptos himenaeos. Suspendisse faucibus sed dolor eget
                                                posuere.Sed id interdum urna. Nam ac elit a ante commodo tristique.
                                                Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem
                                                ipsum dolor sit amet
                                                Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id
                                                interdum urna. Nam ac elit a ante commodo tristique. </p>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex pb-3">
                                        <div><img class="rounded-circle"
                                                  src="client/images/new-releases/new-releases-31.jpg" alt="">
                                        </div>
                                        <div class="pl-e-25">
                                            <div class="d-flex justify-content-between">
                                                <h5>Great Album for all</h5>
                                                <span>Jan 15, 2018</span>
                                            </div>
                                            <div class="adonis-star-rating d-flex align-items-center">
                                                By: David Jame
                                            </div>
                                            <p>Suspendisse faucibus sed dolor eget posuere.Sed id interdum urna. Nam
                                                ac elit a ante commodo tristique. Duis lacus urna, condimentum a
                                                vehicula a, hendrerit ac nisi Lorem ipsum dolor sit ametVestibulum
                                                imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam
                                                ac elit a ante commodo tristique. </p>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex pb-3">
                                        <div><img class="rounded-circle"
                                                  src="client/images/new-releases/new-releases-25.jpg" alt="">
                                        </div>
                                        <div class="pl-e-25">
                                            <div class="d-flex justify-content-between">
                                                <h5>Great Album for all</h5>
                                                <span>Jan 15, 2018</span>
                                            </div>
                                            <div class="adonis-star-rating d-flex align-items-center">
                                                By: David Jame
                                            </div>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                                per inceptos himenaeos. Suspendisse faucibus sed dolor eget
                                                posuere.Sed id interdum urna. Nam ac elit a ante commodo tristique.
                                                Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem
                                                ipsum dolor sit amet
                                                Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id
                                                interdum urna. Nam ac elit a ante commodo tristique. </p>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex pb-3">
                                        <div><img class="rounded-circle"
                                                  src="client/images/new-releases/new-releases-41.jpg" alt="">
                                        </div>
                                        <div class="pl-e-25">
                                            <div class="d-flex justify-content-between">
                                                <h5>Great Album for all</h5>
                                                <span>Jan 15, 2018</span>
                                            </div>
                                            <div class="adonis-star-rating d-flex align-items-center">
                                                By: David Jame
                                            </div>
                                            <p>Suspendisse faucibus sed dolor eget posuere.Sed id interdum urna. Nam
                                                ac elit a ante commodo tristique. Duis lacus urna, condimentum a
                                                vehicula a, hendrerit ac nisi Lorem ipsum dolor sit ametVestibulum
                                                imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam
                                                ac elit a ante commodo tristique. </p>
                                        </div>
                                    </div>
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
