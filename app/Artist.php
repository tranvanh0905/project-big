<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table = "artist";

    public function country()
    {
        return $this->belongsTo('App\Country', 'countries_id', 'id');
    }

    protected $fillable = [
        'nickname', 'full_name', 'avatar', 'about', 'birthday', 'countries_id', 'status', 'cover_image'
    ];
}
