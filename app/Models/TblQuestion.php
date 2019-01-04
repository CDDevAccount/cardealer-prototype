<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblQuestion
 * 
 * @property int $id
 * @property string $question
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $amended_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tbl_answers
 *
 * @package App\Models
 */
class TblQuestion extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'amended_at'
	];

	protected $fillable = [
		'question',
		'amended_at'
	];

	public function tbl_answers()
	{
		return $this->hasMany(\App\Models\TblAnswer::class, 'qid');
	}
}
