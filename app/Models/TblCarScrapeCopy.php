<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblCarScrapeCopy
 * 
 * @property string $post_code
 * @property string $dealer_post_code
 * @property string $orig_url
 * @property string $full_name
 * @property int $price
 * @property int $mileage
 * @property string $model_type
 * @property string $colour
 * @property string $engine_type
 * @property string $fuel_type
 * @property string $engine_size
 * @property string $transmission
 * @property int $doors
 * @property string $registration
 * @property string $year
 * @property string $phone
 * @property string $dealer_description
 * @property string $images
 * @property string $default_image
 * @property string $engine_configuration
 * @property string $make
 * @property string $model
 * @property int $id
 *
 * @package App\Models
 */
class TblCarScrapeCopy extends Eloquent
{
	protected $table = 'tbl_car_scrape_copy';
	public $timestamps = false;

	protected $casts = [
		'price' => 'int',
		'mileage' => 'int',
		'doors' => 'int'
	];

	protected $fillable = [
		'post_code',
		'dealer_post_code',
		'orig_url',
		'full_name',
		'price',
		'mileage',
		'model_type',
		'colour',
		'engine_type',
		'fuel_type',
		'engine_size',
		'transmission',
		'doors',
		'registration',
		'year',
		'phone',
		'dealer_description',
		'images',
		'default_image',
		'engine_configuration',
		'make',
		'model'
	];
}
