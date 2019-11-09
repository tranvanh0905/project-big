<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
<<<<<<< HEAD
    protected $table = "song";
=======
    protected $table = "songs";

    public function genres()
    {
        return $this->hasMany('App\Genres');
    }

    protected $fillable = [
        'genres_id', 'song_url', 'name', 'image', 'lyric',
    ];
>>>>>>> 36cfaea529e3ee258333ea2fae9558afdaba18c3
}
