<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('web_setting', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->char('logo', 191);
			$table->char('phone_webiste', 191);
			$table->char('email_webiste', 191);
			$table->char('url_facebook', 191);
			$table->char('url_instagram', 191);
			$table->char('url_google', 191);
			$table->char('url_skype', 191);
			$table->integer('created_at');
			$table->integer('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('web_setting');
	}
}
