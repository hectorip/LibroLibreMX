<?php namespace Hectorip\Books\Models;

use Model;

/**
 * Book Model
 */

class Book extends Model {

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'hectorip_books_books';

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
	public $hasOne        = [];
	public $hasMany       = [];
	public $belongsTo     = ['liberator' => ['RainLab\User\Models\User']];
	public $belongsToMany = [];
	public $morphTo       = [];
	public $morphOne      = [];
	public $morphMany     = [];
	public $attachOne     = ['cover_url' => ['System\Models\File']];
	public $attachMany    = [];

}