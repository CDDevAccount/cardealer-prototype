@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row" >
	<h1>{{$car->make}}<img class="card-img" src="{{ asset('images/'.str_replace(' ','-',trim($car->make)).'-logo.png') }}" alt="{{$car->model}}" style="max-width:100px; height:auto; max-height:100px;">
	<a href="{{ url()->previous() }}" class='btn btn-outline-dark'>Back</a>
	</h1>
 
	</div>

    <div class="row justify-content-center">

         <h2>{{$car->model}}</h2>
         <h3>{{$car->tbl_vehicle_dealer->name}}</h3>

    </div>
<div class='row'>
    <div class='col-sm-12 col-md-6 col-lg-6'>
    	
		  <div id="accordion">
		    <div class="card">
		      <div class="card-header">
		        <a class="card-link" data-toggle="collapse" href="#collapseOne">
		          Car Details
		        </a>
		      </div>
		      <div id="collapseOne" class="collapse show" data-parent="#accordion">
		        <div class="card-body">
				<table>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Car</th>
				        <td>{{$car->full_name}}</td>
				    </tr>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Colour</th>
				        <td>{{$car->colour}}</td>
				    </tr>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Year</th>
				        <td>{{$car->year}}</td>
				    </tr>
				    				    <tr>
				        <th class="small text-muted pr-2" scope="row">Mileage</th>
				        <td>{{$car->mileage}}</td>
				    </tr>
				    				    <tr>
				        <th class="small text-muted pr-2" scope="row">Body Type</th>
				        <td>{{$car->model_type}}</td>
				    </tr>
				    				    <tr>
				        <th class="small text-muted pr-2" scope="row">Doors</th>
				        <td>{{$car->doors}}</td>
				    </tr>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Registration</th>
				        <td>{{$car->registration}}</td>
				    </tr>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Price</th>
				        <td>£{{number_format($car->price,2)}}</td>
				        <td>@php  if ($car->status==1) echo 'sold'; @endphp</td>
				    </tr>
				</table>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
		        Description
		      </a>
		      </div>
		      <div id="collapseTwo" class="collapse" data-parent="#accordion">
		        <div class="card-body">
					{{$car->dealer_description}}<br/>
		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		          Engine Details
		        </a>
		      </div>
		      <div id="collapseThree" class="collapse" data-parent="#accordion">
		        <div class="card-body">
				<table>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Emmissions</th>
				        <td>{{$car->co2}}</td>
				    </tr>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Fuel Type</th>
				        <td>{{$car->fuel_type}}</td>
				    </tr>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Engine Capacity</th>
				        <td>{{$car->engine_size}}</td>
				    </tr>
				    <tr>
				        <th class="small text-muted pr-2" scope="row">Transmission</th>
				        <td>{{$car->transmission}}</td>
				    </tr>
				    <tr>
				</table>

		        </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-header">
		        <a class="card-link" data-toggle="collapse" href="#collapseFour">
		          Dealer Information
		        </a>
		      </div>
		      <div id="collapseFour" class="collapse" data-parent="#accordion">
		        <div class="card-body">
		        	{{$car->tbl_vehicle_dealer->name}}<br>
		        	{{$car->tbl_vehicle_dealer->address1}}<br>
		        	{{$car->tbl_vehicle_dealer->address2}}<br>
		        	{{$car->tbl_vehicle_dealer->city}}<br>
		        	{{$car->tbl_vehicle_dealer->postcode}}<br>
		        	{{$car->tbl_vehicle_dealer->phone}}
		        </div>
	    	  </div>
	    	</div>

		</div>	
    </div>
    <div class='col-sm-12 col-md-6 col-lg-6'>
	    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	 
			  <ol class="carousel-indicators">
			   @foreach( $images as $photo )
			      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
			   @endforeach
			  </ol>
			 
			  <div class="carousel-inner" role="listbox">
			    @foreach( $images as $photo )
			       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
			           <img class="d-block img-fluid" src="http://media.cardealer.co.uk/{{$photo->registration}}/{{ $photo->imagename }}" alt="{{ $car->model }}">
			              <div class="carousel-caption d-none d-md-block">
			                 <h3>{{ $car->model }}</h3>
			                 <p>{{$car->phone}}</p>
			              </div>
			       </div>
			    @endforeach
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
    </div>

</div>	
</div>

@endsection
