@extends('layouts.cardealerbase')

@section('content')


<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Search Latest Used Cars</li>
        <li class="breadcrumb-item active" aria-current="page">
            <a data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false" aria-controls="collapseExample">View Filter</a>
        </li>
      </ol>
    </nav>


    {!! Form::open(['url' => '/setfilter','method' => 'post']) !!}
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
                    <a href='/search?model_type=4X4'><img class="img-responsive" src="http://media.cardealer.co.uk/carbodies/fourbyfour.png"></a>
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