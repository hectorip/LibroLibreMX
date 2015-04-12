<?php namespace Hectorip\Books\Components;

use Cms\Classes\ComponentBase;

class AvailableBooks extends ComponentBase {
	/**
	 * A collection of available books
	 * @var array
	 */
	public $books;
	public function componentDetails() {
		return [
			'name'        => 'AvailableBooks Component',
			'description' => 'Show the books that area available to give.'
		];
	}

	public function defineProperties() {
		return [];
	}
	public function onRun() {

	}
}