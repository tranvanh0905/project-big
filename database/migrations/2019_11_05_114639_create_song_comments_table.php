<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_comment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('song_id');
            $table->unsignedBigInteger('user_id');
            $table->text('content');
            $table->integer('status');
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
        Schema::dropIfExists('song_comments');
    }
}
