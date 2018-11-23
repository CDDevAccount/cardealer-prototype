<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Dms14Template
 * 
 * @property int $id
 * @property string $feed_id
 * @property string $vehicle_id
 * @property string $registration
 * @property string $colour
 * @property string $fuel_type
 * @property string $year_reg
 * @property string $year_made
 * @property int $mileage
 * @property string $model_type
 * @property int $doors
 * @property string $make
 * @property string $model
 * @property string $variant
 * @property string $engine_size
 * @property float $price
 * @property string $transmission
 * @property string $description
 * @property string $images
 * @property string $default_image
 * @property string $vehicle_url
 *
 * @package App\Models
 */
class Dms14Template extends Eloquent
{
	protected $table = 'dms14_template';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'mileage' => 'int',
		'doors' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'feed_id',
		'vehicle_id',
		'registration',
		'colour',
		'fuel_type',
		'year_reg',
		'year_made',
		'mileage',
		'model_type',
		'doors',
		'make',
		'model',
		'variant',
		'engine_size',
		'price',
		'transmission',
		'description',
		'images',
		'default_image',
		'vehicle_url'
	];
}
