<?php namespace Hectorip\Books\Components;

use Cms\Classes\ComponentBase;

class MyPublishedBooks extends ComponentBase {

	public function componentDetails() {
		return [
			'name'        => 'My Published Books',
			'description' => 'The books that a user had published'
		];
	}

	public function defineProperties() {
		return [];
	}

}