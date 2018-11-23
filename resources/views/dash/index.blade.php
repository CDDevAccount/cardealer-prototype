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
            			Welcome to Car Dealer Dashboard
            		@endguest
            	</div>
                <div class="card-body">
                	@guest
                	@else
                	<div class='table-responsive'>
					    <table class="table table-striped ">
					    <thead>
					      	<tr>
						        <th>Quantity</th>
						        <th>Dealer</th>
						        <th>Post Code</th>
						        <th>Total Value</th>
						        <th>Max Car Value</th>
						        <th>Average Car Value</th>
						        
				        	</tr>
					    </thead>
					    	<tbody>
							@foreach($dealerscores as $dealer)
							      <tr>
							        <td>{{$dealer->Quantity}}</td>
							        <td>{{$dealer->name}}</td>
							        <td>{{$dealer->DealerPostCode}}</td>
							        <td>{{$dealer->DealerValue}}</td>
							        <td>{{$dealer->CarMaxValue}}</td>
							        <td>{{$dealer->CarAverageValue}}</td>
							      </tr>
							@endforeach
					        </tbody>
					    </table>
                    </div>
			  	    @endguest

            </div>
        </div>
    </div>
</div>
@endsection