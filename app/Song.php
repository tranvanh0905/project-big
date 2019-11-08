<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $table = "songs";

    public function genres()
    {
        return $this->hasMany('App\Genres');
    }

    protected $fillable = [
        'genres_id', 'song_url', 'name', 'image', 'lyric',
    ];
}
