<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistSongDetail extends Model
{
    protected $table = "artists_song_details";

    public $timestamps = false;

    protected $hidden = ['pivot'];

    protected $fillable = [
        'song_id', 'artist_id'
    ];

}
