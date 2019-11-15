<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table = "artist";
    protected $fillable = [
        'nickname', 'full_name', 'avatar', 'about', 'birthday', 'status', 'cover_image'
    ];

    public function albums()
    {
        return $this->hasMany('App\Album', 'artist_id');
    }
}
