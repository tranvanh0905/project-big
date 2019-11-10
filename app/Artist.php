<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table = "artist";

    protected $fillable = [
        'name', 'full_name', 'style', 'image', 'about', 'birthday', 'countries_id', 'status'
    ];
}
