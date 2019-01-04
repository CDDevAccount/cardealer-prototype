<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblAnswer
 * 
 * @property int $id
 * @property int $qid
 * @property string $answer
 * @property int $star_rating
 * 
 * @property \App\Models\TblQuestion $tbl_question
 *
 * @package App\Models
 */
class TblAnswer extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'qid' => 'int',
		'star_rating' => 'int'
	];

	protected $fillable = [
		'qid',
		'answer',
		'star_rating'
	];

	public function tbl_question()
	{
		return $this->belongsTo(\App\Models\TblQuestion::class, 'qid');
	}
}
