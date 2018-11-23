<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblQuestion
 * 
 * @property int $id
 * @property string $question
 * @property \Carbon\Carbon $create_tds
 * @property \Carbon\Carbon $update_tds
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tbl_answers
 *
 * @package App\Models
 */
class TblQuestion extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'create_tds',
		'update_tds'
	];

	protected $fillable = [
		'question',
		'create_tds',
		'update_tds'
	];

	public function tbl_answers()
	{
		return $this->hasMany(\App\Models\TblAnswer::class, 'qid');
	}
}
