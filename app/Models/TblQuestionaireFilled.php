<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblQuestionaireFilled
 * 
 * @property int $id
 * @property int $did
 * @property string $filled_in_by
 * @property int $qid
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $amended_at
 *
 * @package App\Models
 */
class TblQuestionaireFilled extends Eloquent
{
	protected $table = 'tbl_questionaire_filled';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'did' => 'int',
		'qid' => 'int'
	];

	protected $dates = [
		'amended_at'
	];

	protected $fillable = [
		'did',
		'filled_in_by',
		'qid',
		'amended_at'
	];
}
