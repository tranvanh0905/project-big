<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaylistDetail extends Model
{
    protected $table = "playlist_details";

    public $timestamps = false;
    protected $hidden = ['pivot'];

    protected $fillable = [
        'playlist_id', 'song_id'
    ];


}