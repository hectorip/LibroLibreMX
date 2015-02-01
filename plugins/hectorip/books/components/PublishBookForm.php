<?php namespace Hectorip\Books\Components;

use Cms\Classes\ComponentBase;
use Hectorip\Books\Models\Book;
use RainLab\User\Classes\AuthManager as RainAuthManager;
use LibroLibre\Users\Models\User as LibroLibreUser;


class PublishBookForm extends ComponentBase {

	public function componentDetails() {
		return [
			'name'        => 'PublishBookForm Component',
			'description' => 'Provides a form to allow authenticated users publish them books'
		];
	}

	public function defineProperties() {
		return [];
	}
	public function onSaveBook() {
		$newBook = new Book();

		$newBook->title = post('book_title');
        $newBook->author = post('book_author');
        $newBook->description = post('book_description');

        \Log::error(\Input::all());
        $newBook->cover_url = \Input::file('book_image');
        $auth           = RainAuthManager::instance();
//		 var_dump(\Session::all());
        #var_dump($auth->getUser());
        LibroLibreUser::getFromUser($auth->getUser());
		$newBook->user_id = $auth->getUser()->user_details->id;

		$result = $newBook->save();

		return ["status" => $result];
	}

}