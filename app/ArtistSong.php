<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistSong extends Model
{
    //
    protected $table = "";

    protected $fillable = [
        'song_id', 'artist_id'
    ];
}
