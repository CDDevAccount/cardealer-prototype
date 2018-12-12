<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Dec 2018 13:24:18 +0000.
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
