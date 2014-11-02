<?php namespace Hectorip\Books\Components;

use Cms\Classes\ComponentBase;

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
	public function onPublishBook() {

	}

}