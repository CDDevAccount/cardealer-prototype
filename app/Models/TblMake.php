<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 30 Nov 2018 12:30:28 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblMake
 * 
 * @property int $id
 * @property string $make
 *
 * @package App\Models
 */
class TblMake extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'make'
	];
}
