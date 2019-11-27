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
        });
    }
}
