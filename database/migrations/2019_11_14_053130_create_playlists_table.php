<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2019_11_05_114734_create_playlists_table.php
        Schema::create('playlist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('artist_id');
            $table->text('playlist_name');
            $table->unsignedBigInteger('song_id');
	    $table->integer('like');
            $table->integer('status');
            $table->integer('created_by');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
=======
        Schema::create('playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('cover_image')->default('client/new-releases/new-releases-3.jpg');
            $table->unsignedInteger('upload_by_user_id');
            $table->integer('status')->default(1);
            $table->timestamps();
>>>>>>> 41c5fbefd0e37c9f1d994ed9b82e4148678b6194:database/migrations/2019_11_14_053130_create_playlists_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlists');
    }
}
