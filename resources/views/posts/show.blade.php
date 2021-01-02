@extends('prueba')

@section('titulo', 'Post')

@section('contenido')
 <b>{{ $post->titulo }}<b>
<p>{{ $post->contenido }}</p>


@endsection