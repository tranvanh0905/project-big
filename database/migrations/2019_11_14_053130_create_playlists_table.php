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
        Schema::create('playlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->integer('like')->default(0);
            $table->text('description');
            $table->text('cover_image');
            $table->integer('status');
            $table->integer('upload_by_user_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }
}
