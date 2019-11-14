<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    //
    public $timestamps = true;

    protected $table = "genres";

    protected $fillable = [
        'name', 'description', 'status', 'image',
    ];

    public function songs()
    {
        return $this->hasMany('App\Song', 'genres_id');
    }
}
