<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $table = "song";

    protected $fillable = [
        'genres_id', 'song_url', 'name', 'image', 'lyric',
    ];
}
