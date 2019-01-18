@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
@foreach($dealers as $dealer)
		<div class='col-lg-12 justify-content-center'>
       <h3>{{$dealer->name}}</h3>
            <br>
        {{$dealer->phone}}<br>
    	</div>
    	@foreach($dealer->vehicles as $motor)	
    	<div class="col-sm-6 col-md-3 col-lg-2">
    		<a href="<?= route('used-cars.show', ['used-cars' => $motor['slug']]);?>" class="btn btn-sm btn-outline-dark">
	        <div class="card">
	        	 <img class="card-img" src="{{ asset('images/cardealer-logo.png') }}" alt="{{ config('app.name', 'Car Dealer') }}">

	            <div class="card-header">
		           	<h4>{{$motor->year.' '.$motor->make}}</h4>
	        		{{$motor->model}}<br>
	        		£{{number_format($motor->price,2)}}
	            </div>
	            <div class="card-body">
	 				Colour:{{$motor->colour}}<br>
	 				Body:{{$motor->model_type}}<br>
	 				Mileage:{{$motor->mileage}}<br>
	 				Doors:{{$motor->doors}}<br>
	 				Reg: {{$motor->registration}}<br>
	           	</div>
	           	<div class="card-footer  text-center">
	        	 <img class="card-img" src="{{ asset('images/'.str_replace(' ','-',trim($motor->make)).'-logo.png') }}" alt="{{$motor->model}}" style="max-width:100px; height:auto; max-height:100px;">
	           	</div>
	        	    
	        </div>
	        </a>
	     </div>
        @endforeach
 @endforeach
</div>

@endsection