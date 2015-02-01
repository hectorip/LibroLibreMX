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
		return [

        ];
	}
	public function onBookSave() {
        $newBook = new Book();
		$newBook->title = post('book_title');
        $newBook->author = post('book_author');
        $newBook->description = post('book_description');
        if(\Input::hasFile('book_image')) {
            $newBook->cover_url = \Input::file('book_image');
        }
        $newBook->active = true;
        $newBook->has_a_problem = false;
        $newBook->delivery = post('book_deliver_conditions');
        $newBook->delivery = post('requests_pickup');
        $auth           = RainAuthManager::instance();
        LibroLibreUser::getFromUser($auth->getUser());
		$newBook->liberator = $auth->getUser();

		$result = $newBook->save();

        $this->page['ReceivedBook'] = post('book_title');
        return \Redirect::to('/book-detail/' .  $newBook->id);
    }

}