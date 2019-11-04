<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    //
    public $timestamps = true;
    protected $table = "genres";

    protected $fillable = [
        'name', 'description', 'status', 'created_at', 'updated_at',
    ];
}
