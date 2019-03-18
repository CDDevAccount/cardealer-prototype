@extends('layouts.sideapp')

@section('content')


<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/used-cars">Used Cars</a></li>
    <li class="breadcrumb-item active" aria-current="page">Results</li>
    <li class="breadcrumb-item"><button-counter  type="button" class="btn btn-sm btn-outline-info"></button-counter></li>
    <circle-slider   
  :side="150"
  :min="0"
  :max="10000"
  :step-size="100"
  :circle-width-rel="20"
  :progress-width-rel="10"
  @touchmove="$refs.input.blur()"
  :knob-radius="10" v-model="val1"></circle-slider>
  <input ref="input" type="number" v-model.number="val1" />

  </ol>
</nav>
    <div class="row" style="height: 80px;">
        <div class='col-lg-12'>

            <carousel id='makes' :items=10 :autoplay="true" :rtl="true" :nav="false" :loop="true" :dots="false" :slidespeed="200" :slide-by=5 :responsive-class="true" :responsive="{0:{items:3,nav:false},600:{items:4,nav:false},900:{items:6,nav:false},1200:{items:10,nav:false}}">
             @foreach($marques as $marque)
                <a href='/search?make={{$marque}}'><img class="img-responsive" src='/images/{{str_replace(' ','-',trim($marque))}}-logo.png' alt={{$marque}}></a>
                
             @endforeach
            </carousel>
        </div>
    </div>
    <div class="row">

        <div class='col-lg-12 img-rounded' >
                <carousel :items=6 :autoplay="true" :nav="false" :loop="true" :dots="false" :responsive="{0:{items:3,nav:false},600:{items:4,nav:false},900:{items:6,nav:false},1200:{items:8,nav:false}}">
                   <a href='/search?model_type=convertible'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/convertible.png"></a>
                    <a href='/search?model_type=coupe'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/coupe.png"></a>
                    <a href='/search?model_type=estate'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/estate.png"></a>
                    <a href='/search?model_type=hatchback'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/hatchback.png"></a>
                    <a href='/search?model_type=mpv'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/mpv.png"></a>
                    <a href='/search?model_type=pickup'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/pickup.png"></a>
                    <a href='/search?model_type=saloon'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/saloon.png"></a>
                    <a href='/search?model_type=suv'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/suv.png"></a>
                    <a href='/search?model_type=panelvan'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/panelvan.png"></a>
                    <a href='/search?model_type=fourbyfour'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/fourbyfour.png"></a>
            </carousel>
        </div>
    </div>
<div class="row justify-content-center">

	<h1>Used {{$checkedMake->make ?? '' }} cars for sale  {{$city->town ?? ''}}</h1>
	<v-select multiple v-model="selected" :options="['foo','bar']"></v-select>
</div>

	<div class="row justify-content-center">
		<div class='col-lg-2 col-md-4 col-sm-12 '>
			<button type="button" class="btn btn-sm btn-outline-info"><span onclick="toggleNav()">&lsaquo;&lsaquo;   Search for Cars</span></button>
		</div>

		<div class='col-lg-6 col-sm-12 col-md-8' >{!! $motors->appends(Request::except('page'))->render() !!}</div>

		<div class='col-lg-2 col-sm-12 col-md-4' >@sortablelink('make', 'Make')	@sortablelink('price', 'Price')</div>
		                          <!-- Use any element to open the sidenav -->
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
</div>

@endsection