@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="dropdown">
	  			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			Makes
  				</button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		  		@foreach($marques as $make)
			    <a class="dropdown-item" href="{{$make->make}}">{{$make->make}}
			    	<span class="badge badge-info">{{$make->total}}</span></a>

			    @endforeach
			  </div>
			</div>
            <div class="card">
                <div class="card-header">@guest 
                		Car Dealer Is Closed 
                	@else
            			Welcome to Car Dealer's Cornucopia of Cars
            		@endguest
            	</div>
                <div class="card-body">
                	@guest
                	@else
                	<div class='table-responsive'>
					    <table class="table table-striped ">
					    <thead>
					      	<tr>
						        <th>Reg. No.</th>
						        <th>Make</th>
						        <th>Name</th>
						        <th colspan="3">Action</th>
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
			  	    @endguest

            </div>
        </div>
    </div>
</div>
@endsection