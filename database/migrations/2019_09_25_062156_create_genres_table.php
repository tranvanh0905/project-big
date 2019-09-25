<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('genres', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->char('name', 191);
			$table->text('description');
			$table->enum('status', [
				'Active',
				'Block',
				'Not Active',
			]);
			$table->char('image', 191);
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
		Schema::dropIfExists('geners');
	}
}
