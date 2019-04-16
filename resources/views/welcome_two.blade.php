@extends('layouts.base_layout')

@section('content')

	@include('header_menu')

	@include('extended_vehicle_filter')

	<div class='container'>

		<catalogue-component></catalogue-component>
	
	</div>

	@include('footer_one')

@endsection
