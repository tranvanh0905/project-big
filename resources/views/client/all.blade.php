@extends('layouts.client.main')

@section('title')
    Tất cả Albums
@endsection

@section('content')
    <div class="pt-4 pt-lg-5"></div>
    @if($type == 'albums')
        <div class="container">
            <main id="main">
                <div class="title-box">
                    <h4 class="title h3 text-uppercase">Tất cả album</h4>
                </div>
                <div class="row auto-fit-columns adonis-animate" data-animation="slideUp"
                     data-animation-item=".music-img-box" data-item-width="230" data-item-max-width="260">
                    @foreach($allAlbum as $album)
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-lg-40">
                                <div class="img-box box-rounded-sm">
                                    <img class="retina" src="{{url($album->cover_image)}}"
                                         data-2x="{{url($album->cover_image)}}" alt="{{$album->title}}">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                            <span class="pointer play-btn-dark round-btn adonis-album-button" data-type="album"
                                                  data-album-id="{{$album->id}}"><i
                                                        class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                            <span class="pointer dropdown-menu-toggle"><span
                                                        class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                         version="1.1"><use
                                                                xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="{{route('singleAlbum', ['albumId' => $album->id])}}">{{$album->title}}</a></h6>
                                <p class="sub-title category"><a href="{{route('singleArtist', ['artistId' => $album->artist->id])
                            }}">{{$album->artist->nick_name}}</a></p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </main>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </div>
    @elseif($type == 'playlists')
        <div class="container">
            <main id="main">
                <div class="title-box">
                    <h4 class="title h3 text-uppercase">Tất cả danh sách phát</h4>
                </div>
                <div class="row auto-fit-columns adonis-animate" data-animation="slideUp"
                     data-animation-item=".music-img-box" data-item-width="230" data-item-max-width="260">
                    @foreach($allPlaylist as $playlist)
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-lg-40">
                                <div class="img-box box-rounded-sm">
                                    <img class="retina" src="{{url($playlist->cover_image)}}"
                                         data-2x="{{url($playlist->cover_image)}}" alt="{{$playlist->name}}">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                            <span class="pointer play-btn-dark round-btn adonis-album-button" data-type="playList"
                                                  data-album-id="{{$playlist->id}}"><i
                                                        class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                            <span class="pointer dropdown-menu-toggle"><span
                                                        class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                         version="1.1"><use
                                                                xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="{{route('singlePlaylist', ['playlistId' => $playlist->id])}}">{{$playlist->name}}</a></h6>
                                <p class="sub-title category">{{count($playlist->songs)}} bài hát</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </main>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </div>
    @elseif($type == 'songs')
        <div class="container">
            <main id="main">
                <div class="title-box">
                    <h4 class="title h3 text-uppercase">Tất cả danh bài hát</h4>
                </div>
                <div class="row auto-fit-columns adonis-animate" data-animation="slideUp"
                     data-animation-item=".music-img-box" data-item-width="230" data-item-max-width="260">
                    @foreach($allSong as $song)
                        <div class="col-auto">
                            <div class="music-img-box mb-e-30 mb-e-lg-40">
                                <div class="img-box box-rounded-sm">
                                    <img class="retina" src="{{url($song->cover_image)}}"
                                         data-2x="{{url($song->cover_image)}}" alt="{{$song->name}}">
                                    <div class="hover-state">
                                        <div class="absolute-bottom-left pl-e-20 pb-e-20">
                                            <span class="pointer play-btn-dark round-btn adonis-album-button" data-type="song"
                                                  data-album-id="{{$song->id}}"><i
                                                        class="play-icon"></i></span>
                                        </div>
                                        <div class="absolute-top-right pr-e-20 pt-e-20">
                                            <span class="pointer dropdown-menu-toggle"><span
                                                        class="adonis-icon icon-4x"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                         version="1.1"><use
                                                                xlink:href="#icon-horizontal-dots"></use></svg></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title"><a href="{{route('singleSong', ['songId' => $song->id])}}">{{$song->name}}</a></h6>
                                <p class="sub-title category">
                                    @foreach($song->artists as $artist)
                                        <a href="{{route('singleArtist', ['artistId' => $artist->id])}}">{{$artist->nick_name}}</a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </main>
            <div class="pt-e-20 pt-e-lg-40"></div>
        </div>
    @endif
@endsection
