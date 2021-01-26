@extends('prueba')

@section('titulo', 'Post')

@section('contenido')
<div class="m-5">
<h4>Titulo</h4>
    &nbsp;&nbsp;

 <b>{{ $post->titulo }}</b>
 <br><br>


     <h4>Contenido</h4>
&nbsp;&nbsp;

<b>{{ $post->contenido }}</b>
 </div>

@endsection