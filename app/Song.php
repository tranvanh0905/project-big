<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $table = "songs";

    public function genres()
    {
        return $this->belongsTo('App\Genres', 'genres_id', 'id');
    }

    public function like_song()
    {
    }

    protected $fillable = [
        'genres_id', 'song_url', 'name', 'image', 'lyric'
    ];
}
