<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Dec 2018 13:24:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblMake
 * 
 * @property int $id
 * @property string $make
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $amended_at
 *
 * @package App\Models
 */
class TblMake extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'amended_at'
	];

	protected $fillable = [
		'make',
		'amended_at'
	];
}
