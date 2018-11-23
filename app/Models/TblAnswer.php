<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
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
