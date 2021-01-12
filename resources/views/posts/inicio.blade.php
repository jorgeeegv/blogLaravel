@extends('prueba')

@section('titulo', 'Bienvenido')

@section('contenido')
@if(auth()->check())
    <h1 class="text-center mt-5">Bienvenido/a {{ auth()->user()->login }} </h1>
@else
    <h1 class="text-center mt-5">Bienvenido/a ...</h1>
    <p class="text-center">....</p>
@endif
@endsection