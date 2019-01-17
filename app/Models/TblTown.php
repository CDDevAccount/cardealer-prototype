<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 17 Jan 2019 15:14:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblTown
 * 
 * @property int $id
 * @property string $town
 * @property string $outcode
 * @property string $town_slug
 * @property string $longitude
 * @property string $latitude
 *
 * @package App\Models
 */
class TblTown extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'town',
		'outcode',
		'town_slug',
		'longitude',
		'latitude'
	];
}
