<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "album";

    public function artist()
    {
        return $this->belongsTo('App\Artist', 'artist_id');
    }

    protected $fillable = [
        'title', 'description', 'cover_image', 'artist_id', 'like'
    ];
}
