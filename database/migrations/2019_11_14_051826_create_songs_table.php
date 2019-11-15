<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mp3_url');
            $table->string('cover_image')->default('client/new-releases/new-releases-1.jpg');
            $table->string('description')->nullable();
            $table->string('lyric')->nullable();
            $table->integer('like')->default(0);
            $table->integer('view')->default(0);
            $table->unsignedInteger('genres_id');
            $table->unsignedInteger('album_id');
            $table->timestamp('release_date');
            $table->integer('upload_by_user_id');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
