@extends('layouts.sideapp')

@section('content')

<div class="container container-fluid text-center bg-grey">
	<h1>Used {{$checkedMake->make ?? '' }} cars for sale  {{$city->town ?? ''}}</h1>
	<h2><button type="button" class="btn btn-lg btn-outline-info"><span onclick="toggleNav()">&lsaquo;&lsaquo;   Search for Cars</span></button></h2>
	<div align="right" >{{ $dealers->links() }}</div>	@sortablelink('make', 'Make')
	@sortablelink('price', 'Price')


	<div class="row justify-content-center">
		                          <!-- Use any element to open the sidenav -->
		
    	@foreach($dealers as $motor)	
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
	    			<img class="card-img" src="{{ asset('images/'.str_replace(' ','-',trim($motor->make)).'-logo.png') }}" alt="{{$motor->make}}" style="max-width:100px;height:auto; max-height:100px;">
	           	</div>
	        	    
	        </div>
	        </a>
	     </div>

        @endforeach
	</div>
	{{ $dealers->links() }}
</div>

@endsection