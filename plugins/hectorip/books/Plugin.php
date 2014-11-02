<?php namespace Hectorip\Books;

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
			'Hectorip\Books\Components\AvailableBooks'  => 'availableBooks',
			'Hectorip\Books\Components\PublishBookForm' => 'publishBookForm'
		];
	}
}
