<?php namespace Hectorip\Books;

use RainLab\User\Models\User as User;
use System\Classes\PluginBase;

/**
 * Books Plugin Information File
 */

class Plugin extends PluginBase {

	/**
	 * Returns information about this plugin.
	 *
	 * @return array
	 */
	public function pluginDetails() {
		return [
			'name'        => 'Books',
			'description' => 'Create books capability for users and administration',
			'author'      => 'Hectorip',
			'icon'        => 'icon-leaf'
		];
	}
	public function registerComponents() {
		return [
			'Hectorip\Books\Components\AvailableBooks'   => 'availableBooks',
			'Hectorip\Books\Components\PublishBookForm'  => 'publishBookForm',
			'Hectorip\Books\Components\MyPublishedBooks' => 'myPublishedBooks',
			'Hectorip\Books\Components\BookDetail'       => 'bookDetail',
		];
	}

    public function boot() {
        User::extend(function ($model) {
                \Log::error("Setting Books Relationship");
                $model->hasMany['books'] = ['Hectorip\Books\Models\Book'];
            }
        );

    }
}
