<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 30 Nov 2018 12:30:28 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblModel
 * 
 * @property int $id
 * @property int $make_id
 * @property string $model
 *
 * @package App\Models
 */
class TblModel extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'make_id' => 'int'
	];

	protected $fillable = [
		'make_id',
		'model'
	];
}
