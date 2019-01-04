<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinkCarImage
 * 
 * @property string $imagename
 * @property string $registration
 * @property int $id
 *
 * @package App\Models
 */
class LinkCarImage extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'imagename',
		'registration'
	];
}
