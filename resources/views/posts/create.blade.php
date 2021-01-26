@extends('prueba')

@section('titulo', 'Nuevo Post')

@section('contenido')
<h3 class="text-center mt-5">NUEVO POST</h1>
    <div class="ml-5 mr-5">

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <h5 for="titulo" class="">Título:</h5>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}">
                @if ($errors->has('titulo'))
                <div class="text-danger">
                    {{ $errors->first('titulo') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <h5 for="editorial">Contenido:</h5>
                <textarea type="text" class="form-control" name="contenido" id="contenido" value="{{ old('titulo') }}"></textarea>
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
