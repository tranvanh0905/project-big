<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignPersonSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('person_song', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('package_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('order', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('order', function (Blueprint $table) {
            $table->foreign('package_id')->references('id')->on('package')->onDelete('cascade');
        });
        Schema::table('user_playlist', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('user_playlist_detail', function (Blueprint $table) {
            $table->foreign('user_playlist_id')->references('id')->on('user_playlist')->onDelete('cascade');
        });
        Schema::table('user_playlist_detail', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
        Schema::table('follow_list', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
        });
        Schema::table('follow_list', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('like_song', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
        Schema::table('like_song', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('album', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
        Schema::table('album', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
        });
        Schema::table('user_liked_playlist', function (Blueprint $table) {
            $table->foreign('playlist_id')->references('id')->on('playlist')->onDelete('cascade');
        });
        Schema::table('user_liked_playlist', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('user_liked_album', function (Blueprint $table) {
            $table->foreign('album_id')->references('id')->on('album')->onDelete('cascade');
        });
        Schema::table('user_liked_album', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('album_comment', function (Blueprint $table) {
            $table->foreign('album_id')->references('id')->on('album')->onDelete('cascade');
        });
        Schema::table('album_comment', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('playlist_comment', function (Blueprint $table) {
            $table->foreign('playlist_id')->references('id')->on('playlist')->onDelete('cascade');
        });
        Schema::table('playlist_comment', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('song_comment', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
        Schema::table('song_comment', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
        Schema::table('playlist', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
