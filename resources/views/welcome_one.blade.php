@extends('layouts.base_layout')

@section('content')

	@include('header_menu',['makes'=>$makes])


	@include('main_content')


	@include('footer_one',['makes'=>$makes])

@endsection