<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    use Filterable;
    	    /**
     * Get the comments for the blog post.
     */
    public function vehicles()
    {
        return $this->belongsTo('App\Dealer','did');
    }

}
