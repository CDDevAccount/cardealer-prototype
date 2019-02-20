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
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                          <!-- Use any element to open the sidenav -->
                    <button type="button" class="btn btn-sm btn-outline-info"><span onclick="toggleNav()">&lsaquo;&lsaquo;   Search for Cars</span></button>
                    <div class="text-center" >{!! $cars->appends(Request::except('page'))->render() !!}</div>

                
                </div>
                <div class="card-body">
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
                                    <td><a href="<?= route('search.show', ['used-cars' => $car['slug']]);?>" class="btn btn-sm btn-outline-dark">{{$car->registration}}</a></td>
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