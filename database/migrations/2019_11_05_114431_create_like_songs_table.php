<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_song', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('song_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_songs');
    }
}
