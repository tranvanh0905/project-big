<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $table = "songs";

    public function genres()
    {
        return $this->belongsTo('App\Genres', 'genres_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'upload_by_user_id');
    }

    public function playlistDetail()
    {
        return $this->hasMany('App\PlaylistDetail', 'song_id');
    }


    protected $fillable = [
        'genres_id', 'mp3_url', 'name', 'image', 'lyric', 'description', 'release_date'
    ];
}
