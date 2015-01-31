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
				$table->integer('user_id')->unsigned()->index();
//				$table->foreign('user_id')->references('id')->on('users');
				$table->timestamps();
			});
	}

	public function down() {
		Schema::dropIfExists('librolibre_users_users');
	}

}
