let adonisPlayer = {},
    adonisAllPlaylists = [],
    adonisPlayerID = 'adonis_jplayer_main',
    adonisPlayerContainer = 'adonis_jp_container',
    adonisPlaylist,
    currentPlaylistId;

const convertArrayToObject = (array, key) => {
    const initialValue = {};
    return array.reduce((obj, item) => {
        return {
            ...obj,
            [item[key]]: item,
        };
    }, initialValue);
};

jQuery(document).ready(function ($) {
    "use strict";

    adonisPlayer.init = function () {

        adonisPlaylist = new adonisJPlayerPlaylist(
            {
                jPlayer: '#' + adonisPlayerID,
                cssSelectorAncestor: "#" + adonisPlayerContainer
            },
            [
                {
                    title: "",
                    artist: "",
                    mp3: "",
                    poster: "",
                    id: ""
                }
            ],
            {
                playlistOptions: {
                    enableRemoveControls: true
                },
                swfPath: "client/js",
                supplied: "oga, mp3",
                useStateClassSkin: true,
                autoBlur: true,
                smoothPlayBar: true,
                keyEnabled: false,
                audioFullScreen: true,
                display: false,
                autoPlay: false,
            });

        // player loaded event
        $("#" + adonisPlayerID).bind($.jPlayer.event.loadeddata, function (event) {
            let Artist = adonisExtractArtistLink($(this).data("jPlayer").status.media.artist),
                Poster = $(this).data("jPlayer").status.media.poster,
                Title = $(this).data("jPlayer").status.media.title;
            $('#' + adonisPlayerContainer + ' .current-item .song-poster img').attr('src', Poster);
            $("#" + adonisPlayerID).find('img').attr('alt', '');
        });

        $(document).on('click', '#adonis-playlist .playlist-item .song-poster', function () {
            $(this).parent().find('.jp-playlist-item').trigger('click');
        });

        /**
         * event play
         */
        $("#" + adonisPlayerID).bind($.jPlayer.event.play + ".jp-repeat", function (event) {

            // poster
            let poster = $(this).data("jPlayer").status.media.poster;
            $('#' + adonisPlayerContainer).find('.adonis-player .song-poster img').attr('src', poster);

            // blurred background
            $('#' + adonisPlayerContainer).find('.blurred-bg').css('background-image', 'url(' + poster + ')');


            // astist
            let artist = adonisExtractArtistLink($(this).data("jPlayer").status.media.artist);
            if (artist.name) {
                $('#' + adonisPlayerContainer + ' .artist-name').html('<a href="' + artist.link + '">' + artist.name + '</a>');
            } else {
                $('#' + adonisPlayerContainer + ' .artist-name').html(artist.name);
            }

            // activate album
            if (typeof currentPlaylistId !== 'undefined') {
                $("[data-album-id='" + currentPlaylistId + "']").addClass('jp-playing');
            }

        });

        $('.adonis-mute-control').click(function () {
            let muteControl = $(this);

            if (muteControl.hasClass('muted')) {
                let volume = muteControl.attr('data-volume');
                $("#" + adonisPlayerID).jPlayer("unmute");
                muteControl.removeClass('muted');
                $("#" + adonisPlayerID).jPlayer("volume", volume);
            } else {
                let volume = $("#" + adonisPlayerID).data("jPlayer").options.volume;
                muteControl.attr('data-volume', volume);
                $("#" + adonisPlayerID).jPlayer("mute").addClass('muted');
                muteControl.addClass('muted');
            }
        });

        /**
         * event pause
         */
        $("#" + adonisPlayerID).bind($.jPlayer.event.pause + ".jp-repeat", function (event) {
            // deactivate album
            if (typeof currentPlaylistId !== 'undefined') {
                $("[data-album-id='" + currentPlaylistId + "']").removeClass('jp-playing');
            }
        });

        /**
         * extract artist link from artist string
         * @param str e.g. "Artist name{http://artist.com}"
         * @return return object containing two key link and name
         */
        function adonisExtractArtistLink(str) {
            let re = /{(.*?\})/,
                strRe = str.replace(re, ''),
                Match = str.match(re, '')
                , Link;
            if (Match != null) {
                let Link = Match[1].replace('}', '');
            }
            return {link: Link, name: strRe};
        }


        /* Modern Seeking */

        let timeDrag = false; /* Drag status */

        $('.jp-progress').mousedown(function (e) {
            timeDrag = true;
            let percentage = updatePercentage(e.pageX, $(this));
            $(this).addClass('dragActive');

            updatebar(percentage);
        });

        $(document).mouseup(function (e) {
            if (timeDrag) {
                timeDrag = false;
                let percentage = updatePercentage(e.pageX, $('.jp-progress.dragActive'));
                $('.jp-progress.dragActive');
                if (percentage) {
                    $('.jp-progress.dragActive').removeClass('dragActive');
                    updatebar(percentage);
                }
            }
        });

        $(document).mousemove(function (e) {
            if (timeDrag) {
                let percentage = updatePercentage(e.pageX, $('.jp-progress.dragActive'));
                updatebar(percentage);
            }
        });

        //update Progress Bar control
        let updatebar = function (percentage) {
            let maxduration = $("#" + adonisPlayerID).jPlayer.duration; //audio duration

            $('.jp-play-bar').css('width', percentage + '%');

            $("#" + adonisPlayerID).jPlayer("playHead", percentage);
            // Update progress bar and video currenttime

            $("#" + adonisPlayerID).jPlayer.currentTime = maxduration * percentage / 100;

            return false;
        };


        function updatePercentage(x, progressBar) {
            let progress = progressBar;
            let maxduration = $("#" + adonisPlayerID).jPlayer.duration; //audio duration
            let position = x - progress.offset().left; //Click pos
            let percentage = 100 * position / progress.width();
            //Check within range
            if (percentage > 100) {
                percentage = 100;
            }
            if (percentage < 0) {
                percentage = 0;
            }
            return percentage;
        }


        let volumeDrag = false;
        $(document).on('mousedown', '.jp-volume-bar', function (e) {
            volumeDrag = true;
            updateVolume(e.pageX);
        });

        $(document).mouseup(function (e) {
            if (volumeDrag) {
                volumeDrag = false;
                updateVolume(e.pageX);
            }
        });

        $(document).mousemove(function (e) {
            if (volumeDrag) {
                updateVolume(e.pageX);
            }
        });

        //update Progress Bar control
        let updateVolume = function (x) {
            let progress = $('.jp-volume-bar');
            let position = x - progress.offset().left; //Click pos
            let percentage = 100 * position / progress.width();

            //Check within range
            if (percentage > 100) {
                percentage = 100;
            }
            if (percentage < 0) {
                percentage = 0;
            }
            $("#" + adonisPlayerID).jPlayer("volume", (percentage / 100));
        };

        // remove track item
        $(document).on('click', '.remove-track-item-playlist', function () {
            let parentLi = openMenu.parents('li.item');
            adonisPlaylist.remove(parentLi.length - 1);
        });

        $(document).on('click', '.remove-track-item-current', function () {
            adonisPlaylist.remove(adonisPlaylist.current);
        });


        /**
         * Function to add track. add track if id not found and return index. If found it return the index
         * @param track track id
         * @returns index number of the track in the playlist
         */
        adonisPlayer.addTrack = function (track) {
            let _track = tracks[track]
            let foundTrack = false;
            let _return;
            adonisPlaylist.playlist.forEach(function (value, index) {
                if (value.id === track) {
                    foundTrack = true;
                    _return = index;
                }
            });

            if (foundTrack === false) {
                adonisPlaylist.add(_track);
                _return = adonisPlaylist.playlist.length - 1;
            }
            return _return;
        }

        /**
         * function to transfer song poster and play button to a larger view. eg. homepage 3 top album listener
         * @param selector
         */
        adonisPlayer.transferAlbum = function (selector) {
            $(document).on('click', selector, function (e) {
                e.preventDefault();
                let PosterTarget = $(this).attr('data-poster-target'),
                    PosterImage = $(this).attr('data-poster'),
                    track = $(this).attr('data-track');

                let PosterClone = $(PosterTarget).clone();
                PosterClone.css('background-image', 'url(' + PosterImage + ')').fadeOut(0);
                PosterClone.insertAfter($(PosterTarget));

                $(PosterTarget).fadeOut('slow', function () {
                    $(this).remove();
                });
                PosterClone.fadeIn('slow');
                let Index = adonisPlayer.addTrack(track);
                adonisPlaylist.play(Index)
            });
        };
        adonisPlayer.transferAlbum('.transfer-album');

        //adonis album play button
        $(document).on('click', '.adonis-album-button', function (e) {
            let type = $(this).attr('data-type');
            let albumId = parseInt($(this).attr('data-album-id'));
            if (type === "song") {
                $.ajax({
                    type: 'GET',
                    url: '/song/' + albumId,
                    success: function (data) {
                        adonisAllPlaylists[albumId] = data["data"];

                        // set play list if not set yet
                        if(albumId && typeof adonisAllPlaylists[albumId] !== 'undefined' && currentPlaylistId !== albumId){
                            adonisPlaylist.setPlaylist(adonisAllPlaylists[albumId]);
                            currentPlaylistId = albumId;

                            // play or pause
                            if($('#'+adonisPlayerID).data().jPlayer.status.paused){
                                setTimeout(function(){
                                    adonisPlaylist.play(0);
                                },700);
                            }else{
                                setTimeout(function(){
                                    adonisPlaylist.play(0);
                                },700);
                            }
                        }else{
                            // play or pause
                            if($('#'+adonisPlayerID).data().jPlayer.status.paused){
                                setTimeout(function(){
                                    adonisPlaylist.play();
                                },700);
                            }else{
                                adonisPlaylist.pause();
                            }
                        }
                    }
                });
            }

            if (type === "album") {
                $.ajax({
                    type: 'GET',
                    url: '/album/' + albumId,
                    success: function (data) {
                        adonisAllPlaylists[albumId] = data["data"];

                        // set play list if not set yet
                        if(albumId && typeof adonisAllPlaylists[albumId] !== 'undefined' && currentPlaylistId !== albumId){
                            adonisPlaylist.setPlaylist(adonisAllPlaylists[albumId]);
                            currentPlaylistId = albumId;

                            // play or pause
                            if($('#'+adonisPlayerID).data().jPlayer.status.paused){
                                setTimeout(function(){
                                    adonisPlaylist.play(0);
                                },700);
                            }else{
                                setTimeout(function(){
                                    adonisPlaylist.play(0);
                                },700);
                            }
                        }else{
                            // play or pause
                            if($('#'+adonisPlayerID).data().jPlayer.status.paused){
                                setTimeout(function(){
                                    adonisPlaylist.play();
                                },700);
                            }else{
                                adonisPlaylist.pause();
                            }
                        }

                    }
                });
            }

            if (type === "playList") {
                $.ajax({
                    type: 'GET',
                    url: '/playlist/' + albumId,
                    success: function (data) {
                        adonisAllPlaylists[albumId] = data["data"];

                        // set play list if not set yet
                        if(albumId && typeof adonisAllPlaylists[albumId] !== 'undefined' && currentPlaylistId !== albumId){
                            adonisPlaylist.setPlaylist(adonisAllPlaylists[albumId]);
                            currentPlaylistId = albumId;

                            // play or pause
                            if($('#'+adonisPlayerID).data().jPlayer.status.paused){
                                setTimeout(function(){
                                    adonisPlaylist.play(0);
                                },700);
                            }else{
                                setTimeout(function(){
                                    adonisPlaylist.play(0);
                                },700);
                            }
                        }else{
                            // play or pause
                            if($('#'+adonisPlayerID).data().jPlayer.status.paused){
                                setTimeout(function(){
                                    adonisPlaylist.play();
                                },700);
                            }else{
                                adonisPlaylist.pause();
                            }
                        }

                    }
                });
            }
        });

        adonisPlayer.addPlaylist = function (albumId) {
            if (albumId && typeof adonisAllPlaylists[albumId] !== 'undefined') {
                adonisAllPlaylists[albumId].forEach(function (_value) {
                    adonisPlaylist.add(_value);
                });
            }
        };

    };

    $(document).ajaxComplete(function () {
        if (parseInt($('.adonis-album-button').attr('data-album-id')) === currentPlaylistId) {
            $('.adonis-album-button').addClass('jp-playing');
        }
    });


    $(window).imagesLoaded(function () {
        setTimeout(function () {
            adonisPlayer.init();
        }, 100);


        // // setTimeout(function () {
        // //     adonisPlaylist.setPlaylist(adonisAllPlaylists[0]);
        // // }, 5000);
        //
        // $(document).on('click', '.play-song', function (e) {
        //     let $songId = $(this).attr('data-song-id');
        //
        //     $.ajax({
        //         type: 'GET',
        //         url: '/song/'+ $songId,
        //         success: function (data) {
        //             adonisAllPlaylists[0] = [
        //                 {
        //                     title: data.name,
        //                     artist: '123',
        //                     mp3: data.mp3_url,
        //                     poster: data.cover_image,
        //                     id: data.id
        //                 }
        //             ];
        //             adonisPlaylist.setPlaylist(adonisAllPlaylists[0]);
        //
        //             if ($('#' + adonisPlayerID).data().jPlayer.status.paused) {
        //                 setTimeout(function () {
        //                     adonisPlaylist.play(0);
        //                 }, 700);
        //             } else {
        //                 adonisPlaylist.pause();
        //             }
        //             // setTimeout(function () {
        //             //     adonisPlaylist.play(0);
        //             // }, 2000);
        //         }
        //     });
        // });
        //
        // //Update view
        // $("#" + adonisPlayerID).bind($.jPlayer.event.ended, function (event) {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //
        //     $.ajax({
        //         type: 'POST',
        //         url: '/update-view/'+ adonisAllPlaylists[0][0].id,
        //         success: function (data) {
        //             console.log(data);
        //         }
        //     });
        // });
    });
    // jquery end
});
