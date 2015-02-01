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
				$table->text('delivery')->nullable();
				$table->integer('liberator_id')->unsigned();
				$table->string('attachments')->nullabale();
				$table->boolean('requested_pickup')->nullabale();
                $table->boolean('active');
                $table->boolean('has_a_problem');
//				$table->foreign('user_id')->('id')->on('users');
				$table->timestamps();
			});
	}

	public function down() {
		Schema::dropIfExists('hectorip_books_books');
	}

}
