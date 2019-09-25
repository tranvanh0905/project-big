<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('genres_id');
            $table->integer('artisan_id');
            $table->char('googlel_drive_id', 191);
            $table->char('name', 191);
            $table->char('image', 191);
            $table->text('lyric');
	        $table->enum('status', [
		        'Active',
		        'Not Active',
	        ]);
	        $table->integer('view');
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
        Schema::dropIfExists('song');
    }
}
