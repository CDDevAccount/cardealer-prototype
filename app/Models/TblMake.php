<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
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
