@extends('layouts.app')

@section('content')
<div class="container container-fluid text-center bg-grey">
	<div class="row justify-content-center">
		@foreach($towns as $town)
			<a href='http://dev.cardealer.co.uk/used-cars/in/{{$town->town_slug}}'> {{$town->town}}</a>
		@endforeach
		@foreach($dealers as $dealer)
				<div class='col-lg-12 justify-content-center'>
					<div class="jumbotron text-center">
		       <h3>{{$dealer->name}}</h3>
		       <dl align='center'>
		       		<dt>Address</dt>
		       		<dd>{{$dealer->address1}}</dd>
		       		<dd>{{$dealer->address2}}</dd>
		       		<dd>{{$dealer->address3}}</dd>
		       		<dd>{{$dealer->city}}</dd>
		       		<dd>{{$dealer->postcode}}</dd>
		       		<dd>{{$dealer->phone}}</dd>
		       	</dl>
		    		</div>
		    	</div>
		    	@foreach($dealer->vehicles as $motor)	
		    	<div class="col-sm-6 col-md-4 col-lg-3">
		    		<a href="<?= route('used-cars.show', ['used-cars' => $motor['slug']]);?>" class="btn btn-sm btn-outline-dark">
			        <div class="card">
			        	 <img class="card-img" src="{{ asset('images/cardealer-logo.png') }}" alt="{{ config('app.name', 'Car Dealer') }}">

			            <div class="card-header">
				           	<h4>{{$motor->year.' '.$motor->make}}</h4>
				           	<dl>
				           		<dt>{{$motor->model}}</dt>
				           		<br>
			        			<dd>£{{number_format($motor->price,2)}}</dd>
			        		</dl>
			            </div>

			            <div class="card-body">
			            	<dl align='center'>
				 				<dt> Colour/Body:</dt>
				 					<dd>{{$motor->doors}} Door {{$motor->colour}} {{$motor->model_type}}</dd>	 	
				 				<dt>Mileage:</dt>
				 					<dd>{{number_format($motor->mileage,0)}}</dd>
				 				<dt>Reg:</dt> 
				 					<dd>{{$motor->registration}}</dd>
			 				</dl>
			           	</div>
			           
			           	<div class="card-footer  text-center">
			        	<img class="card-img" src="{{ asset('images/'.str_replace(' ','-',trim($motor->make)).'-logo.png') }}" alt="{{$motor->make}}" style="max-width:100px; height:auto; max-height:100px;">
			           	</div>
			        	    
			        </div>
			        </a>
			     </div>
		        @endforeach
		 @endforeach
	</div>
</div>

@endsection