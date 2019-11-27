//Thêm bài hát vào playlist cá nhân ở trang chi tiết playlist cá nhân
$(document).on('click', '.add-to-playlist', function (e) {
    let songId = parseInt($(this).attr('data-song-id'));
    let playlistId = parseInt($(this).attr('data-playlist-id'));

    $(this).removeClass('fa-plus').addClass('fa-times');
    $(this).removeClass('add-to-playlist').addClass('remove-from-playlist');
    let selectItem = $('.item-2[data-song-id=' + songId + ']');
    let item = selectItem.prop('outerHTML');

    selectItem.fadeOut(100, function () {
        this.remove();
    });
    $('#main-song').fadeOut().append(item).fadeIn();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: 'add-song-user-playlist/' + songId + '/' + playlistId,
        success: function (data) {
            $.notify({
                icon: 'fas fa-check-circle',
                message: data.msg
            });
        }
    });
});
//Xóa bài hát khỏi playlist cá nhân
$(document).ready(function() {
    $('#main-song').on('click', '.remove-from-playlist', function () {
        let id = $(this).attr('data-song-id');
        let playlistId = $(this).attr('data-playlist-id');
        let itemTarget = $('.item[data-song-id="' + id + '"]');
        console.log(id);

        itemTarget.fadeOut(300, function () {
            itemTarget.remove();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "user/library/user-playlist/single-playlist/" + playlistId + "/remove-song/" + id,
            data: {playlistId: playlistId, songId: id},
            success: function (data) {
                $.notify({
                    icon: 'fas fa-check-circle',
                    message: data.msg
                });
            }
        });
    });
});

