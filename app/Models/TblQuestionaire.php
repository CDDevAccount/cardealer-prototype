<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
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
