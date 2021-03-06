<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 12 Dec 2018 13:24:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinkQuestionaireToQuestion
 * 
 * @property int $questionaire_id
 * @property int $question_id
 *
 * @package App\Models
 */
class LinkQuestionaireToQuestion extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'questionaire_id' => 'int',
		'question_id' => 'int'
	];

	protected $fillable = [
		'questionaire_id',
		'question_id'
	];
}
