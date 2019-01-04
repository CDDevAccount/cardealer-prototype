<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblVehicleStatus
 * 
 * @property int $id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $amended_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tbl_vehicles
 *
 * @package App\Models
 */
class TblVehicleStatus extends Eloquent
{
	protected $table = 'tbl_vehicle_status';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'amended_at'
	];

	protected $fillable = [
		'status',
		'amended_at'
	];

	public function tbl_vehicles()
	{
		return $this->hasMany(\App\Models\TblVehicle::class, 'status');
	}
}
