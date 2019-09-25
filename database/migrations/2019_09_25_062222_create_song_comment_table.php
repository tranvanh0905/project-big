<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongCommentTable extends Migration
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
            $table->integer('song_id');
            $table->integer('user_id');
            $table->text('content');
            $table->enum('status', ['Active', 'Block']);
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
        Schema::dropIfExists('song_comment');
    }
}
