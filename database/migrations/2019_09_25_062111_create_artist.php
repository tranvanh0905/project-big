<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 191);
            $table->char('full_name', 191);
            $table->char('avatar', 191);
            $table->char('style', 191);
            $table->text('about');
            $table->integer('birth_day');
            $table->integer('country_id');
            $table->enum('status', ['Active', 'Block', 'Not Active']);
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
        Schema::dropIfExists('artist');
    }
}
