@extends('layouts.cardealerbase')

@section('content')


<div class="container">
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="/">Home</a></li>
	    <li class="breadcrumb-item"><a href="/used-cars">Used Cars</a></li>
	    <li class="breadcrumb-item" aria-current="page">Results</li>
		<li class="breadcrumb-item active" aria-current="page">
	        <a data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false" aria-controls="collapseExample">View Filter</a>
	    </li>  
	</ol>
</nav>
    {!! Form::open(['url' => '/filter/','method' => 'post']) !!}
    <div class="collapse" id="collapseSearch">

        <div class='row'>

                <div class='col-lg-2 col-md-4 col-sm-6'>

                        <v-select multiple v-model="makes" placeholder="Makes..." :options="['Abarth', 'Alfa Romeo', 'Alpine ', 'Aston Martin', 'Audi', 'Austin ', 'BMW', 'Bentley', 'Caterham', 'Cadillac', 'Chevrolet', 'Chrysler', 'Citroen', 'Dacia', 'Daewoo', 'Daihatsu', 'Daimler', 'Dodge', 'Ds', 'Ferrari', 'Fiat', 'Ford', 'Great Wall', 'Honda', 'Hummer ', 'Hyundai', 'Infiniti', 'Isuzu', 'Iveco', 'Jaguar', 'Jeep', 'Kia', 'LDV ', 'Lamborghini', 'Land Rover', 'Lexus', 'Lotus', 'MG', 'Mini', 'Maserati', 'Maybach ', 'Mazda', 'McLaren', 'Mercedes-Benz', 'Mitsubishi', 'Morgan ', 'Nissan', 'Noble ', 'Peugeot', 'Porsche', 'Proton', 'Reliant ', 'Renault', 'Rolls-Royce', 'Rover', 'Saab', 'Seat', 'Skoda', 'Smart', 'Ssangyong', 'Subaru', 'Suzuki', 'TVR', 'Tesla', 'Toyota', 'Vauxhall', 'Volkswagen', 'Volvo']"></v-select>
                         <input type="hidden" v-model="makes" name="makes" />

                </div>
        
                <div class='col-lg-2 col-md-4 col-sm-6'>


                         <v-select label="Body" multiple v-model="bodies" placeholder="Body..." :options="['4X4','Convertible','Coupe','Estate','Hatchback','Minibus','MPV','Pickup','Saloon','SUV','Van']"></v-select>
                         <input type="hidden" v-model="bodies" name="bodies" />

                </div>
            
                <div class='col-lg-2 col-md-3 col-sm-4'>

                        <v-select multiple v-model="fuels" placeholder="Fuel..." :options="['Diesel','Diesel Hybrid','Electric','Flex','Petrol','Petrol Hybrid']"></v-select>
                        <input type="hidden" v-model="fuels" name="fuels" />

                </div>
                <div class='col-lg-1 col-md-2 col-sm-3'>

                        <swatch></swatch>

                </div>
                <div class='col-lg-2 col-md-3 col-sm-4'>
 

                     <button class="btn btn-md btn-outline-info" type="submit" value="Search Now">Search >></button>

                </div>

        
        </div>
    </div>
  {!! Form::close() !!}

<div class="row justify-content-center">

	<h1>Used {{$checkedMake->make ?? '' }} cars for sale  {{$city->town ?? ''}}</h1>

</div>
</div>

	
<div class="brdcrumb">
    
		@include('extended_vehicle_filter')
</div>
<div class='col-lg-8 offset-lg-2'>
<catalogue-component></catalogue-component>

</div>
<!--
	<div class="row justify-content-center">
		<div class='col-lg-2 col-md-4 col-sm-12 '>
			<button type="button" class="btn btn-sm btn-outline-info"><span onclick="toggleNav()">&lsaquo;&lsaquo;   Search for Cars</span></button>
		</div>

		<div class='col-lg-6 col-sm-12 col-md-8' >{!! $motors->appends(Request::except('page'))->render() !!}</div>

		<div class='col-lg-2 col-sm-12 col-md-4' >@sortablelink('make', 'Make')	@sortablelink('price', 'Price')</div>
		

    </div>

		<div class="row justify-content-center">	
    	@foreach($motors as $motor)	
    	<div class="col-sm-6 col-md-4 col-lg-3">
    		<a href='/used-cars/for-sale/{{$motor->slug}}' class="btn btn-sm btn-outline-dark">
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
	 {!! $motors->appends(Request::except('page'))->render() !!} 
	-->
</div>

@endsection