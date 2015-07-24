<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first_name', 'last_name', 'bio', 'author_name', 'author_bio', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	/**
	 * Mutator for adding Gravatar image.
	 *
	 * @var array
	 * @return string
	 */

	public function getGravatarAttribute()
	{
		$hash = md5(strtolower(trim($this->attributes['email'])));
		return "http://www.gravatar.com/avatar/$hash";
	}

	public function setAuthorBioAttribute($value)
	{
		if (empty($value)) { // will check for empty string, null values, see php.net about it
			$this->attributes['author_bio'] = NULL;
		} else {
			$this->attributes['author_bio'] = $value;
		}

	}

	public function setAuthorNameAttribute($value)
	{
		if (empty($value)) { // will check for empty string, null values, see php.net about it
			$this->attributes['author_name'] = NULL;
		} else {
			$this->attributes['author_name'] = $value;
		}

	}
}
