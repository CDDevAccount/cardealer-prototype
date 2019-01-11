<?php

namespace App;

class VehicleFilters extends QueryFilter
{
    public function popular($order = 'desc')
    {
        return $this->builder->orderBy('views', $order);
    }
        
    public function make($make)
    {
        return $this->builder->where('make', $make);
    }
    
}
