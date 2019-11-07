<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo')->default('images/default_img.jpg');
            $table->char('name_website', 191);
            $table->char('phone_website', 191);
            $table->char('email_website', 191);
            $table->char('url_facebook', 191);
            $table->char('url_instagram', 191);
            $table->char('url_google', 191);
            $table->char('url_skype', 191);
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
        Schema::dropIfExists('websetting');
    }
}
