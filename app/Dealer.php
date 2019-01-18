<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    //
    use Filterable;
    	    /**
     * Get the comments for the blog post.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'id', 'did');
    }

}
