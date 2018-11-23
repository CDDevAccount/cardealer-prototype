<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblDealerNote
 * 
 * @property int $id
 * @property int $did
 * @property string $note
 * @property \Carbon\Carbon $create_tds
 * @property \Carbon\Carbon $last_amended_tds
 *
 * @package App\Models
 */
class TblDealerNote extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'did' => 'int'
	];

	protected $dates = [
		'create_tds',
		'last_amended_tds'
	];

	protected $fillable = [
		'did',
		'note',
		'create_tds',
		'last_amended_tds'
	];
}
