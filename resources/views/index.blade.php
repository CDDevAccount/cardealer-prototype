@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">

                                Welcome to Car Dealer's Cornucopia Quality of Cars

                </div>
                <div class="card-body">
                    @include('dd')
                    @include('vehiclefilter')
                    <div class='table-responsive'>
                            <table class="table table-striped ">
                            <thead>
                                <tr>
                                        <th>Reg. No.</th>
                                        <th>Make</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th colspan="2">Price</th>
                                </tr>
                            </thead>
                        	<tbody>
                                @foreach($cars as $car)
                                      <tr>
                                        <td><a href="<?= route('used-cars.show', ['used-cars' => $car['slug']]);?>" class="btn btn-sm btn-outline-dark">{{$car->registration}}</a></td>
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