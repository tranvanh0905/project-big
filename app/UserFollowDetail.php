<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollowDetail extends Model
{
    protected $table = "user_follow_details";

    public $timestamps = false;
    protected $hidden = ['pivot'];

    protected $fillable = [
        'artist_id', 'user_id'
    ];
}
