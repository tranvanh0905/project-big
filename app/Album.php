<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function artist()
    {
        return $this->belongsTo('App\Artist', 'artist_id');
    }

    public function userLikedAlbums(){
        return $this->belongsToMany('App\User', 'user_liked_albums');
    }

}
