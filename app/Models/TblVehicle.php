<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Kyslik\ColumnSortable\Sortable;

/**
 * Class TblVehicle
 * 
 * @property int $id
 * @property int $did
 * @property string $make
 * @property string $model
 * @property string $colour
 * @property string $fuel_type
 * @property string $year
 * @property float $price
 * @property string $dealer_description
 * @property string $post_code
 * @property string $orig_url
 * @property string $full_name
 * @property int $mileage
 * @property string $model_type
 * @property string $engine_type
 * @property string $engine_size
 * @property string $transmission
 * @property int $doors
 * @property string $registration
 * @property string $phone
 * @property string $images
 * @property string $default_image
 * @property string $engine_configuration
 * @property int $seats
 * @property string $interior_colour
 * @property string $h1_text
 * @property int $status
 * @property bool $detail_check
 * @property bool $mot_check
 * @property \Carbon\Carbon $mot_check_date
 * @property string $slug
 * 
 * @property \App\Models\TblVehicleStatus $tbl_vehicle_status
 *
 * @package App\Models
 */
class TblVehicle extends Eloquent
{
	public $timestamps = false;

    public $sortable = ['id',
                       'make',
                       'model',
                       'price',
                        'created_at',
                        'updated_at'];

	protected $casts = [
		'did' => 'int',
		'price' => 'float',
		'mileage' => 'int',
		'doors' => 'int',
		'seats' => 'int',
		'status' => 'int',
		'detail_check' => 'bool',
		'mot_check' => 'bool'
	];

	protected $dates = [
		'mot_check_date'
	];

	protected $fillable = [
		'did',
		'make',
		'model',
		'colour',
		'fuel_type',
		'year',
		'price',
		'dealer_description',
		'post_code',
		'orig_url',
		'full_name',
		'mileage',
		'model_type',
		'engine_type',
		'engine_size',
		'transmission',
		'doors',
		'registration',
		'phone',
		'images',
		'default_image',
		'engine_configuration',
		'seats',
		'interior_colour',
		'h1_text',
		'status',
		'detail_check',
		'mot_check',
		'mot_check_date',
		'slug'
	];

	public function tbl_vehicle_status()
	{
		return $this->belongsTo(\App\Models\TblVehicleStatus::class, 'status');
	}
	public function tbl_vehicle_dealer()
	{
		return $this->belongsTo(\App\Models\TblDealer::class,'did');
	}
}
