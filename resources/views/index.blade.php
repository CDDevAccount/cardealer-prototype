@extends('layouts.sideapp')

@section('content')

<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/search">Search Latest Used Cars</a></li>
    <li class="breadcrumb-item active" aria-current="page">Results</li>
  </ol>
</nav>
<div class="row">
    <div class='col-lg-12'>
        <carousel id='makes' :items=10 :autoplay="true" :rtl="true" :nav="false" :loop="true" :dots="false" :slidespeed="200" :slideby=5>
         @foreach($marques as $marque)
            <img class="img-responsive" src='images/{{str_replace(' ','-',trim($marque))}}-logo.png' alt={{$marque}}>
            
         @endforeach
        </carousel>
    </div>
    <div class='col-lg-12'>
            <carousel :items=6 :autoplay="true" :nav="false" :loop="true" :dots="false" :rtl="false" >
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/convertible.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/coupe.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/estate.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/hatchback.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/mpv.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/pickup.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/saloon.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/suv.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/panelvan.png">
                <img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/fourbyfour.png">
        </carousel>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card text text-center">
                <div class="card-header">
                          <!-- Use any element to open the sidenav -->
                    <button type="button" class="btn btn-sm btn-outline-info"><span onclick="toggleNav()">&lsaquo;&lsaquo;   Search for Cars</span></button>
                    


                </div>
                <div class="card-body text-center">
                    <div class="text-center" >{!! $cars->appends(Request::except('page'))->render() !!}</div>
                    <div class='table-responsive'>
                        <table class="table table-striped ">
                        <thead>
                            <tr>
                                    <th>Reg. No.</th>
                                    <th>@sortablelink('make', 'Make')</th>
                                    <th>@sortablelink('model', 'Model')</th>
                                    <th>@sortablelink('year', 'Year')</th>
                                    <th>@sortablelink('price', 'Price')</th>
                                    <th>@sortablelink('model_type', 'Body Style')</th>
                            </tr>
                        </thead>
                    	<tbody>
                            @foreach($cars as $car)
                                  <tr>
                                    <td><a href='/used-cars/for-sale/{{$car->slug}}' class="btn btn-sm btn-outline-dark">{{$car->registration}}</a></td>
                                    <td>{{$car->make}}</td>
                                    <td>{{$car->model}}</td>
                                    <td>{{$car->year}}</td>
                                    <td>£{{number_format($car->price,2)}}</td>
                                    <td>{{$car->model_type}}</td>
                                  </tr>
                            @endforeach
                        </tbody>
                        </table>

                	</div>
            	</div>
        </div>
    </div>
</div>
@endsection