<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlists';

    public function user()
    {
        return $this->belongsTo('App\User', 'upload_by_user_id');
    }

    public function playlistDetail()
    {
        return $this->hasMany('App\PlaylistDetail', 'playlist_id');
    }
}
