<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PasswordReset
 * 
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class PasswordReset extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'email',
		'token'
	];
}
