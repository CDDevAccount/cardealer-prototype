<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Dec 2018 13:24:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblQuestionaire
 * 
 * @property int $id
 * @property string $questionaire
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $amended_at
 *
 * @package App\Models
 */
class TblQuestionaire extends Eloquent
{
	protected $table = 'tbl_questionaire';
	public $timestamps = false;

	protected $dates = [
		'amended_at'
	];

	protected $fillable = [
		'questionaire',
		'amended_at'
	];
}
