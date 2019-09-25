<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLikedPlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_liked_playlist', function (Blueprint $table) {
	        $table->bigIncrements('id');
	        $table->integer('playlist_id');
	        $table->integer('user_id');
	        $table->integer('created_at');
	        $table->integer('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_liked_playlist');
    }
}
