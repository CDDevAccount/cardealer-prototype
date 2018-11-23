<?php

/**
 * Created by Luck.
 * Date: Thu, 21 Nov 2018 11:12:12 +0000.
 */

namespace App\Models;
use Reliese\Database\Eloquent\Model as Eloquent;
/**
 * Class DealerTotal
 * 
 * @property int $quantity
 * @property int $did
 * @property string $name
 * @property string $dea 
 *
 * @package App\Models
 */

class DealerTotal extends Eloquent
{
    protected $table = 'uvw_TotalsByPostcodeDealer';
}