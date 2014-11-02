<?php namespace LibroLibre\Users\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateUsersTable extends Migration {

	public function up() {
		Schema::create('librolibre_users_users', function ($table) {
				$table->engine = 'InnoDB';
				$table->increments('id');
				$table->string('quote')->nullable();
				$table->string('facebook')->nullable();
				$table->string('twitter')->nullable();
				$table->string('github')->nullable();
				$table->timestamps();
			});
	}

	public function down() {
		Schema::dropIfExists('librolibre_users_users');
	}

}
