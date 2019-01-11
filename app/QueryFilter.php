<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


abstract class QueryFilter
{
	protected $request;

	protected $builder;

	
	public function __contstruct(Request $request)
	{
		$this->request=$request;
	}

	
	public function apply(Builder $builder)
	{
		$this->builder=$builder;

		foreach ($this->filters() as $name=>$value) {
			# code...
			if (method_exists($this, $name)){
				call_user_func_array([$this,$name], array_filter($value));
			}
		}
		return $this->builder;
	}

	
	public function filters()
	{
	//	dd($this);
		return $this->request->all();
	}

}

