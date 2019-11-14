<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaylistDetail extends Model
{
    protected $table = "playlist_detail";

    public function playlist()
    {
        return $this->belongsTo('App\Playlist', 'playlist_id');
    }

    public function song()
    {
        return $this->belongsTo('App\Song', 'song_id');
    }


}
