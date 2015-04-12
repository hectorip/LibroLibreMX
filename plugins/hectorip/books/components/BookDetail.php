<?php namespace Hectorip\Books\Components;

use Cms\Classes\ComponentBase;
use Hectorip\Books\Models\Book as Book;
class BookDetail extends ComponentBase {
    /**
     * Data of a published Book
     * @var array
     */
    public $books;
    public function componentDetails() {
        return [
            'name'        => 'Book Detail Component',
            'description' => 'Shows a book Detail'
        ];
    }

    public function defineProperties() {
        return [];
    }
    public function onRun() {
        $this->page['book'] = $this->book();
    }
    public function book() {
        $nook_id = $this->param('book_id');
        \Log::error("Param: ". $nook_id);
        return Book::findOrFail($nook_id);
    }
}