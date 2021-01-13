@extends('prueba')

@section('titulo', 'Listado de posts')

@section('contenido')
<h3 class="mt-3 text-center p-2 text-dark">LISTADO DE POSTS</h3>

 <table class="table">   
@foreach($posts as $post)
<tr>
 <td scope="row"><b>{{ $post->titulo }}<b></td>
<td scope="row"><p>{{ $post->contenido }}</p></td>
<td scope="row"><p>( {{ $post->usuario->login }} )</p></td>
<td>
<form action="{{ route('posts.destroy', $post) }}" method="POST">
    @csrf
 @method('DELETE')
 <button class="btn btn-danger">Borrar</button>
</form>
</td>
<td>
 <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>

</td>
<td>
 <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success">Ver</a>
</td>
</tr>
@endforeach
 </table>   
@endsection