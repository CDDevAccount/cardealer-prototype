<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 13:12:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblVehicleStatus
 * 
 * @property int $id
 * @property string $status
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

	protected $fillable = [
		'status'
	];

	public function tbl_vehicles()
	{
		return $this->hasMany(\App\Models\TblVehicle::class, 'status');
	}
}
