<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
	/**
     * Filter a result set.
     *
     * @param  Builder      $query
     * @param  QueryFilters $filters
     * @return Builder
     */
	
    public function scopeFilter($query, QueryFilter $filters)
    {
    	return $filters->apply($query);
    }

}

