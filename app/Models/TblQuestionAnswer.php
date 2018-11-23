<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblQuestionAnswer
 * 
 * @property int $id
 * @property int $answer_id
 * @property \Carbon\Carbon $created_tds
 * @property \Carbon\Carbon $amended_tds
 *
 * @package App\Models
 */
class TblQuestionAnswer extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'answer_id' => 'int'
	];

	protected $dates = [
		'created_tds',
		'amended_tds'
	];

	protected $fillable = [
		'answer_id',
		'created_tds',
		'amended_tds'
	];
}
