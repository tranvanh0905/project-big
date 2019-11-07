<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
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
            $table->char('style', 191);
            $table->text('about');
            $table->integer('birthday');
            $table->integer('countries_id');
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
        Schema::dropIfExists('artists');
    }
}
