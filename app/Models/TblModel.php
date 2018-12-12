<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Dec 2018 13:24:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblModel
 * 
 * @property int $id
 * @property int $make_id
 * @property string $model
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $amended_at
 *
 * @package App\Models
 */
class TblModel extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'make_id' => 'int'
	];

	protected $dates = [
		'amended_at'
	];

	protected $fillable = [
		'make_id',
		'model',
		'amended_at'
	];
}
