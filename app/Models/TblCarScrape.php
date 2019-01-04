<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblCarScrape
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
 * @property string $dealer_name
 * @property string $dealer_website
 * @property string $dealer_email
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
class TblCarScrape extends Eloquent
{
	protected $table = 'tbl_car_scrape';
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
		'dealer_name',
		'dealer_website',
		'dealer_email',
		'phone',
		'dealer_description',
		'images',
		'default_image',
		'engine_configuration',
		'make',
		'model'
	];
}
