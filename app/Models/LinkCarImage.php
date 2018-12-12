<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Dec 2018 13:24:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinkCarImage
 * 
 * @property string $imagename
 * @property string $regnumber
 * @property int $id
 *
 * @package App\Models
 */
class LinkCarImage extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'imagename',
		'regnumber'
	];
}
