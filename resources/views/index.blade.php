@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12">

            <div class="card">
                <div class="card-header">

            			Welcome to Car Dealer's Cornucopia Quality of Cars
     
            	</div>
                <div class="card-body">
                	@include('dd')
                	<div class='table-responsive'>
					    <table class="table table-striped ">
					    <thead>
					      	<tr>
						        <th>Reg. No.</th>
						        <th>Make</th>
						        <th>Name</th>
						        <th colspan="2">Action</th>
				        	</tr>
					    </thead>
					    	<tbody>
							@foreach($cars as $car)
							      <tr>
							        <td><a href="<?= route('car.show', ['car' => $car['id']]);?>" class="btn btn-sm btn-success">{{$car->registration}}</a></td>
							        <td>{{$car->make}}</td>
							        <td>{{$car->model}}</td>
							        <td>{{$car->year}}</td>
							        <td>{{$car->model_type}}</td>
							      </tr>
							@endforeach
					        </tbody>
					    </table>

				    	{{ $cars->links() }}
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection