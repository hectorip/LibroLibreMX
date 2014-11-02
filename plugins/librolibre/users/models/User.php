<?php namespace LibroLibre\Users\Models;

use Model;

/**
 * User Model
 */

class User extends Model {

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'librolibre_users_users';

	/**
	 * @var array Guarded fields
	 */
	protected $guarded = ['*'];

	/**
	 * @var array Fillable fields
	 */
	protected $fillable = [];

	/**
	 * @var array Relations
	 */
	public $belongsTo = ['RainLasb\Users\Models\User'];
	public $hasMany   = ['Hectorip\Books\Models\Book'];
}