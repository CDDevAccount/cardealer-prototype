<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblQuestionaire
 * 
 * @property int $id
 * @property string $questionaire
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $modified_at
 *
 * @package App\Models
 */
class TblQuestionaire extends Eloquent
{
	protected $table = 'tbl_questionaire';
	public $timestamps = false;

	protected $dates = [
		'modified_at'
	];

	protected $fillable = [
		'questionaire',
		'modified_at'
	];
}
