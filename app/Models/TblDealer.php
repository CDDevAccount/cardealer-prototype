<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Jan 2019 14:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblDealer
 * 
 * @property int $id
 * @property int $pid
 * @property string $name
 * @property string $branchname
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $city
 * @property string $postcode
 * @property string $phone
 * @property string $mobile
 * @property string $contact_name
 * @property string $contact_title
 * @property string $dealer_web
 * @property string $dealer_email
 * @property string $outcode
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class TblDealer extends Eloquent
{
	protected $table = 'tbl_dealer';

	protected $casts = [
		'pid' => 'int'
	];

	protected $fillable = [
		'pid',
		'name',
		'branchname',
		'address1',
		'address2',
		'address3',
		'city',
		'postcode',
		'phone',
		'mobile',
		'contact_name',
		'contact_title',
		'dealer_web',
		'dealer_email',
		'outcode'
	];
    public function vehicles()
    {
        return $this->hasMany('App\Models\TblVehicle', 'did')->orderBy('make') ;
    }
}
