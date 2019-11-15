<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLikedPlaylist extends Model
{

    protected $table = "user_liked_playlists";

    public $timestamps = false;
    protected $hidden = ['pivot'];

    protected $fillable = [
        'playlist_id', 'user_id'
    ];
}
