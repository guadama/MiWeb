@extends('layout')

@section('title', "Usuario {$id}")

@section('contenido')

	<h1>Usuario Nro. {{ $id }}</h1>

	Mostrando detalle del usuario: {{ $id }}

@endsection