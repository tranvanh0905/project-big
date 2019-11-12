<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLikedSong extends Model
{
    protected $table = "user_liked_song";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function song()
    {
        return $this->belongsTo('App\Song', 'song_id', 'id');
    }

    protected $fillable = [
        'user_id', 'song_id'
    ];
}
