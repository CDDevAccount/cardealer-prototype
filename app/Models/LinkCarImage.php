<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinkCarImage
 * 
 * @property string $imagename
 * @property string $regnumber
 *
 * @package App\Models
 */
class LinkCarImage extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'imagename',
		'regnumber'
	];
}
