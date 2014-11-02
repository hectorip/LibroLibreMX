<?php namespace LibroLibre\Users;

use RainLab\User\Models\User as User;
use System\Classes\PluginBase;

/**
 * Users Plugin Information File
 */

class Plugin extends PluginBase {

	/**
	 * Returns information about this plugin.
	 *
	 * @return array
	 */
	public function pluginDetails() {
		return [
			'name'        => 'Users',
			'description' => 'User Detail for Libro Libre',
			'author'      => 'LibroLibre',
			'icon'        => 'icon-leaf'
		];
	}
	public function boot() {
		User::extend(function ($model) {
				$model->hasOne['user_details'] = ['LibroLibre\Users\Models\User'];
			}
		);

	}
}
