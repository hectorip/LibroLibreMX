<?php namespace Hectorip\Books\Components;

use Cms\Classes\ComponentBase;
use Hectorip\Books\Models\Book;

class PublishBookForm extends ComponentBase {

	public function componentDetails() {
		return [
			'name'        => 'PublishBookForm Component',
			'description' => 'Provides a form to allow authenticathed users publish them books'
		];
	}

	public function defineProperties() {
		return [];
	}
	public function onSaveBook() {
		$newBook = new Book;

		$newBook->title = post('book_title');

		$newBook->save();

		return ["status" => true];
	}

}