<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'user';


    public function songs()
    {
        return $this->hasMany('App\Song', 'upload_by_user_id');
    }

    public function playlists()
    {
        return $this->hasMany('App\Playlist', 'upload_by_user_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name','last_name','first_name','gender','password'
    ];

}
