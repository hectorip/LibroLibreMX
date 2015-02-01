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
	public $belongsTo = ['user' => ['RainLab\User\Models\User']];

    public static function getFromUser($user)
    {
        \Log::error("Getting user details");
        if ($user->user_details) {
            return $user->user_details;
        }
        $user_details       = new static;
        $user_details->user = $user;
        $user_details->save();

        $user->user_details = $user_details;
        return $user_details;
    }

}