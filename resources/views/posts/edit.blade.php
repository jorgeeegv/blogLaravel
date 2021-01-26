@extends('prueba')

@section('titulo', 'Editar Post')

@section('contenido')
<h3 class="text-center mt-5">Editar POST</h1>
    <div class="ml-5 mr-5">
        <form action="{{ route('posts.update',$post->id )}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="PUT">
            <div class="form-group">
                <h5 for="titulo" class="">Título:</h5>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo',$post->titulo) }}">
                @if ($errors->has('titulo'))
                <div class="text-danger">
                    {{ $errors->first('titulo') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <h5 for="editorial">Contenido:</h5>
                <input type="text" class="form-control" name="contenido" id="contenido" value="{{ old('contenido',$post->contenido) }}">
                @if ($errors->has('contenido'))
                <div class="text-danger">
                    {{ $errors->first('contenido') }}
                </div>
                @endif
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">

        </form>
    </div>
    @endsection
