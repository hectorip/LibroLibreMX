<?php namespace Hectorip\Books\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateBooksTable extends Migration {

	public function up() {
		Schema::create('hectorip_books_books', function ($table) {
				$table->engine = 'InnoDB';
				$table->increments('id');
				$table->string('title');
				$table->string('author');
				$table->string('isbn')->nullable();
				$table->string('publisher')->nullable();
				$table->text('description');
				$table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('id')->on('librolibre_users_users');
				$table->timestamps();
			});
	}

	public function down() {
		Schema::dropIfExists('hectorip_books_books');
	}

}
