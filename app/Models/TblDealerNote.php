<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblDealerNote
 * 
 * @property int $id
 * @property int $did
 * @property string $note
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class TblDealerNote extends Eloquent
{
	protected $casts = [
		'did' => 'int'
	];

	protected $fillable = [
		'did',
		'note'
	];
}
