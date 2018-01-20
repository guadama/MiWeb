@extends('layout')

@section('title', "Bienvenido Usuario")

@section('contenido')

	@empty($nickname)

		<h1> Bienvenido {{ $name }} </h1>

	@else

		<h1> Bienvenido {{ $name }}, tu apodo es {{ $nickname }} </h1>

	@endempty

@endsection